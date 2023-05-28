<?php


namespace App\Http\Controllers;


use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController
{
    public function view() {
        $data = Config::query()->get();

        $dataArray = [];

        foreach ($data as $dataItem){
            $dataArray[$dataItem['option']]=$dataItem['value'];
        }

        return view('admin.config', ['data'=>$dataArray]);
    }

    public function save(Request $request) {

        $config = Config::query()->where('option',$request->get('abschnitt'))->first();
        $config->value = $request->get('intro');
        $config->save();

        $data = Config::query()->get();

        $dataArray = [];

        foreach ($data as $dataItem){
            $dataArray[$dataItem['option']]=$dataItem['value'];
        }

        return view('admin.config', ['data'=>$dataArray]);
    }
}
