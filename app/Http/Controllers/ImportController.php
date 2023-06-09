<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_Changes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ImportController
{

    public function view() {


        $message="Import läuft bereits, bitte warten...";
        $messageColor='green';
        $filename = storage_path()."/import/import.txt";
        if (file_exists($filename)){
            return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>true]);
        }
        $saveFile = storage_path()."/import/save.txt";
        if (file_exists($saveFile)){
            $saveFileContent = (int)file_get_contents($saveFile);
            $message=$saveFileContent." User erfolgreich importiert";
            $messageColor='blue';
            return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>false]);
        }

        return view('admin.import');
    }

    public function execute(Request $request) {

        if (!is_dir(storage_path().'/import')){
            mkdir(storage_path().'/import');
        }

        $message="Import läuft bereits, bitte warten...";
        $messageColor='green';
        $filename = storage_path()."/import/import.txt";
        if (file_exists($filename)){
            return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>true]);
        }

        if (!isset($request->all()['importFile'])){
            $message="keine Datei ausgewählt";
            $messageColor='red';
            return view('admin.import',['message'=>$message,'messageColor'=>$messageColor]);
        }
        $file = $request->all()['importFile'];
        $fileContent = file_get_contents($file->getpathname());
        file_put_contents($filename,$fileContent);


        $saveFile = storage_path()."/import/save.txt";
        file_put_contents($saveFile,"0");

        $message="Upload abgeschlossen - Import läuft";
        $messageColor='green';

        return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>true]);
    }

    public function import(){
        $filename = storage_path()."/import/import.txt";
        if (!file_exists($filename)){
            return;
        }
        $saveFile = storage_path()."/import/save.txt";
        $saveFileContent = (int)file_get_contents($saveFile);

        if ($saveFileContent === 0){
            $this->deleteOld();
            file_put_contents($saveFile,"1");
        }
        $fileContent = file_get_contents($filename);

        $fileArray = explode (PHP_EOL,$fileContent);
        unset($fileArray[0]);
        foreach ($fileArray as $key => $import){
            if (empty($import)){
                continue;
            }
            if ($key <= $saveFileContent){
                continue;
            }
            $importParts = explode(",",$import);
            $name = str_replace(["'", "("], "", $importParts[0]);
            $password = str_replace(["'", ")"], "", $importParts[1]);
            $usertry = User::query()->where('email',$password)->first();
            if ($usertry === null)
            {
                $user = new User();
                $user->name = '****-'.explode("-",$name)[1];
                $user->login_attempts = explode("-",$name)[0];
                $user->email = $password;
                $user->password = Hash::make($name);
                $user->save();
            } else {
                Log::info('User: '.$name.' PW: '.$password.' ('.$usertry->name. ') ist doppelt: '.$usertry->email);
            }
            $saveFileContent++;
            file_put_contents($saveFile,$saveFileContent);
        }
        Log::info('alles geklappt');
        unlink($filename);
    }

    private function deleteOld(): void{
        $users = User::all();
        $adminSeen = false;
        foreach ($users as $user){
            if ($adminSeen === false){
                if (!($user->name === "SuperAdmin")){
                    continue;
                }
                $adminSeen = true;
                continue;
            }
            $user->delete();
        }

        $changed_data = User_Changes::all();
        foreach ($changed_data as $data){
            $data->delete();
        }
    }
}
