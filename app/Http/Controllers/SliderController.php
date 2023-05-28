<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController
{

//news_Kram

    public function news_index(Request $request)
    {
        if (Auth::user()->get_right()->name==='Admin'){

            return view('admin.slider.news_index');
        }

        return view('welcome');
    }

    public function news_create()
    {
        if (Auth::user()->get_right()->name==='Admin'){
            return view('admin.slider.news_create');
        }

        return redirect()->route('welcome');
    }


    public function news_store(Request $request)
    {
        if (Auth::user()->get_right()->name==='Admin'){

            //move File
            if($request->file('image')) {
                $file = $request->file('image');
                $filename=$file->getClientOriginalName();

                $punktpos=strripos($filename,".");
                $laenge=strlen($filename)-$punktpos;
                $filename = time() . substr($filename,$punktpos,$laenge);

                // File upload location
                $location = public_path() . '/assets/img/slide/';

                // Upload file
                $file->move($location, $filename);
            }
            return redirect()->route('slider_index');
        }

        return redirect()->route('welcome');
    }

    public function news_delete($id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            unlink(public_path().'/assets/img/slide/'.$id);
            return redirect()->route('slider_index');
        }

        return redirect()->route('home');
    }
}
