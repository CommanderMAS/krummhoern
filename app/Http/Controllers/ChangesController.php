<?php


namespace App\Http\Controllers;

use App\Models\User_Changes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ChangesController
{

    public function view(Request $request)
    {
        $dataMessage = User_Changes::query()->where('name',Auth::id())->orderByDesc('id')->first();
        if (!($dataMessage === null))
        $dataMessage = User_Changes::query()->where('name',Auth::id())->get();
        return view('admin.dashboard', ['dataMessage' => $dataMessage]);
    }

    public function save(Request $request)
    {
        $message = 'Daten erfolgreich gespeichert';
        $messageColor = 'darkgreen';
        $changes = new User_Changes($request->all());
        $attributes = $changes->getAttributes();
        foreach ($attributes as $key => $change){
            $changes->setAttribute($key,Crypt::encrypt($attributes[$key]));

        }
        $changes->hebenummer = Auth::user()->login_attempts.str_replace("*","",Auth::user()->name);
        $changes->name = Auth::id();
        //dd($changes);
        $changes->save();
        $dataMessage = User_Changes::query()->where('name',Auth::id())->orderByDesc('id')->first();
        if (!($dataMessage === false))
        $dataMessage = User_Changes::query()->where('name',Auth::id())->orderByDesc('id')->get();
        return view('admin.dashboard', ['message' => $message, 'messageColor' => $messageColor, 'dataMessage' => $dataMessage]);
    }
}
