<?php


namespace App\Http\Controllers;


class ConfigController
{
    public function view() {
        return view('config');
    }

    public function save() {
        echo ("Test");
        return view('import');
    }
}
