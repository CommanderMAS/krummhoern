<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_Changes;
use App\Models\User_Rights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ImportController
{

    public function view() {
        return view('admin.import');
    }

    public function execute(Request $request) {
        $message="Alles ok";
        $messageColor='green';
        if (!isset($request->all()['importFile'])){
            $message="keine Datei ausgewählt";
            return view('admin.import',['message'=>$message]);
        }
        $this->deleteOld();
        $file = $request->all()['importFile'];
        $fileContent = file_get_contents($file->getpathname());
        $fileArray = explode (PHP_EOL,$fileContent);
        unset($fileArray[0]);
            foreach ($fileArray as $import){
                if (empty($import)){
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

                $rights = new User_Rights();
                $rights->id_user = $user->id;
                $rights->name = 'User';
                $rights->power = 1;
                $rights->save();
            }

        return view('admin.import',['message'=>$message,'messageColor'=>$messageColor]);
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
