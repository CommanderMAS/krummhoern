<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AktuellesController
{

//news_Kram

    public function news_index(Request $request)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $news = News::query()->where('active', 1)->get();


            foreach($news as $info){
                switch ($info->category){
                    case 0:
                        $info->category_name="Info";
                        break;
                    case 1:
                        $info->category_name="Warning";
                        break;
                    case 2:
                        $info->category_name="Danger";
                        break;
                    case 3:
                        $info->category_name="Success";
                        break;
                }
            }
            return view('admin.aktuelles.news_index',['news'=>$news]);
        }

        return view('welcome');
    }

    public function news_create()
    {
        if (Auth::user()->get_right()->name==='Admin'){
            return view('admin.aktuelles.news_create');
        }

        return redirect()->route('welcome');
    }


    public function news_store(Request $request)
    {
        if (Auth::user()->get_right()->name==='Admin'){

            //Create News
            $news=New News();
            $news->fill($request->all());
            $test=$request->get('topnews');
            if ($test=="option1"){
                $news->topnews=1;
            } else
                $news->topnews=0;

            //move File
            if($request->file('image')) {
                $file = $request->file('image');
                $filename=$file->getClientOriginalName();

                $punktpos=strripos($filename,".");
                $laenge=strlen($filename)-$punktpos;
                $filename = time() . '_' . $news->id. substr($filename,$punktpos,$laenge);

                // File upload location
                $location = public_path() . '/images/aktuelles/';

                // Upload file
                $file->move($location, $filename);
            }
            $news->image=$filename;
            $news->save();
            return redirect()->route('aktuelles_index');
        }

        return redirect()->route('welcome');
    }

    public function news_edit($id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $news=News::query()->where('id',$id)->first();
            return view('admin.aktuelles.news_edit',['news'=>$news]);
        }

        return redirect()->route('welcome');
    }

    public function news_update(Request $request, $id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $news=News::query()->where('id',$id)->first();
            $alt_image=$news->image;
            $news->fill($request->all());
            $test=$request->get('topnews');
            if ($test=="option1"){
                $news->topnews=1;
            } else
                $news->topnews=0;
            //move File
            if($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = public_path() . '/images/aktuelles/';

                // Upload file
                $file->move($location, $filename);
                $news->image=$filename;
            } else {
                $news->image=$alt_image;
            }
            $news->save();
            return redirect()->route('home');
        }

        return redirect()->route('welcome');
    }

    public function news_delete($id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $news=News::query()->where('id',$id)->first();
            $news->active=0;
            $news->save();
            return redirect()->route('aktuelles_index');
        }

        return redirect()->route('home');
    }
}
