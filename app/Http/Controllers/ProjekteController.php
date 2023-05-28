<?php


namespace App\Http\Controllers;


use App\Models\Projekte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class projekteController
{

//projekte_Kram

    public function news_index(Request $request)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            if ($request->get("suche") == null) {
                $projekte = Projekte::query()->where('active', 1)->get();
            } else {
                $projekte = Projekte::query()->where('active', 1)->where('title', 'like', "%" . $request->get("suche") . "%")->get();
                $projekte2 = Projekte::query()->where('active', 1)->where('intro', 'like', "%" . $request->get("suche") . "%")->get();
                foreach ($projekte2 as $u) {
                    $projekte->concat($u);
                }
                $projekte->uniqueStrict();
            }

            foreach ($projekte as $info) {
                switch ($info->category) {
                    case 0:
                        $info->category_name = "Info";
                        break;
                    case 1:
                        $info->category_name = "Warning";
                        break;
                    case 2:
                        $info->category_name = "Danger";
                        break;
                    case 3:
                        $info->category_name = "Success";
                        break;
                }
            }
            return view('admin.projekte.news_index', ['news' => $projekte]);
        }

        return view('welcome');
    }

    public function news_create()
    {
        if (Auth::user()->get_right()->name==='Admin'){
            return view('admin.projekte.news_create');
        }

        return redirect()->route('welcome');
    }


    public function news_store(Request $request)
    {
        if (Auth::user()->get_right()->name==='Admin'){

            //Create projekte
            $projekte = new projekte();
            $projekte->fill($request->all());
            $test = $request->get('topnews');
            if ($test == "option1") {
                $projekte->topnews = 1;
            } else
                $projekte->topnews = 0;

            //move File
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $punktpos = strripos($filename, ".");
                $laenge = strlen($filename) - $punktpos;
                $filename = time() . '_' . $projekte->id . substr($filename, $punktpos, $laenge);

                // File upload location
                $location = public_path() . '/images/projekte/';

                // Upload file
                $file->move($location, $filename);
            }
            $projekte->image = $filename;
            $projekte->save();
            return redirect()->route('projekte_index');
        }

        return redirect()->route('welcome');
    }

    public function news_edit($id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $projekte = Projekte::query()->where('id', $id)->first();
            return view('admin.projekte.news_edit', ['news' => $projekte]);
        }

        return redirect()->route('welcome');
    }

    public function news_update(Request $request, int $id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $projekte = Projekte::query()->where('id', $id)->first();
            $alt_image = $projekte->image;
            $projekte->fill($request->all());
            $test = $request->get('topnews');
            if ($test == "option1") {
                $projekte->topnews = 1;
            } else
                $projekte->topnews = 0;
            //move File
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = public_path() . '/images/projekte/';

                // Upload file
                $file->move($location, $filename);
                $projekte->image = $filename;
            } else {
                $projekte->image = $alt_image;
            }
            $projekte->save();
            return redirect()->route('projekte_index');
        }

        return redirect()->route('welcome');
    }

    public function news_delete($id)
    {
        if (Auth::user()->get_right()->name==='Admin'){
            $projekte = Projekte::query()->where('id', $id)->first();
            $projekte->active = 0;
            $projekte->save();
            return redirect()->route('projekte_index');
        }

        return redirect()->route('welcome');
    }
}
