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
        $messageColor='yellow';
        $filename = storage_path()."\import\import.txt";
        if (file_exists($filename)){
            return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>true]);
        }
        $saveFile = storage_path()."\import\save.txt";
        if (file_exists($saveFile)){
            $saveFileContent = (int)file_get_contents($saveFile);
            $message=$saveFileContent." User erfolgreich importiert";
            $messageColor='blue';
            return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>false]);
        }

        return view('admin.import');
    }

    public function execute(Request $request) {

        if (!is_dir(storage_path().'\import')){
            mkdir(storage_path().'\import');
        }

        $message="Import läuft bereits, bitte warten...";
        $messageColor='yellow';
        $filename = storage_path()."\import\import.txt";
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


        $saveFile = storage_path()."\import\save.txt";
        file_put_contents($saveFile,"1");

        $message="Upload abgeschlossen - Import läuft";
        $messageColor='green';

        return view('admin.import',['message'=>$message,'messageColor'=>$messageColor, 'import'=>true]);
    }

    public function import(){
        $filename = storage_path()."\import\import.txt";
        if (!file_exists($filename)){
            return;
        }
        $saveFile = storage_path()."\import\save.txt";
        $saveFileContent = (int)file_get_contents($saveFile);

        Log::info('Sind bei User: '.$saveFileContent);

        $fileContent = file_get_contents($filename);
        $this->deleteOld();

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
            $user = new User();
            $name = str_replace(["'","("],"",$importParts[0]);
            $user->name = $name;
            $user->email = $name;
            $password = str_replace(["'",")"],"",$importParts[1]);
            $user->password =  Hash::make($password);
            $user->save();
            $saveFileContent++;
            file_put_contents($saveFile,$saveFileContent);
        }
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
