<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\News;
use App\Models\Projekte;

class FrontendController
{
    public function viewAktuelles()
    {
        $today = today()->format('Y-m-d');
        $news = News::query()->where('active', 1)->where('date_from', '<=', $today)->where('date_to', '>=', $today)->get();
        $news2 = News::query()->where('active', 1)->where('date_from', '<=', $today)->where('date_to', null)->get();
        $news3 = News::query()->where('active', 1)->where('date_from', null)->where('date_to', '>=', $today)->get();
        $news4 = News::query()->where('active', 1)->where('date_from', null)->where('date_to', null)->get();
        foreach ($news2 as $n2) {
            $news->push($n2);
        }
        foreach ($news3 as $n3) {
            $news->push($n3);
        }
        foreach ($news4 as $n4) {
            $news->push($n4);
        }

        return view('aktuelles', ['news' => $news]);
    }

    public function viewAktuelleNews(int $id, string $text)
    {

        setlocale(LC_TIME, "de_DE");

        $news = News::query()->where('id', $id)->first();
        return view('newsDetail', ['news' => $news]);
    }


    public function projekte()
    {
        $today = today()->format('Y-m-d');
        $news = Projekte::query()->where('active', 1)->where('date_from', '<=', $today)->where('date_to', '>=', $today)->get();
        $news2 = Projekte::query()->where('active', 1)->where('date_from', '<=', $today)->where('date_to', null)->get();
        $news3 = Projekte::query()->where('active', 1)->where('date_from', null)->where('date_to', '>=', $today)->get();
        $news4 = Projekte::query()->where('active', 1)->where('date_from', null)->where('date_to', null)->get();
        foreach ($news2 as $n2) {
            $news->push($n2);
        }
        foreach ($news3 as $n3) {
            $news->push($n3);
        }
        foreach ($news4 as $n4) {
            $news->push($n4);
        }
        return view('projekte', ['news' => $news]);
    }

    public function viewAktuellesProjekt(int $id)
    {

        setlocale(LC_TIME, "de_DE");

        $news = Projekte::query()->where('id', $id)->first();
        return view('projekteDetail', ['news' => $news]);
    }

    public function organisation()
    {
        $data['ausschuss']=Config::query()->where('option','ausschuss')->value('value');
        $data['vorstand']=Config::query()->where('option','vorstand')->value('value');
        $data['vorstand_personen']=Config::query()->where('option','vorstand_personen')->value('value');
        $data['verwaltung']=Config::query()->where('option','verwaltung')->value('value');
        $data['bezirk_1']=Config::query()->where('option','bezirk_1')->value('value');
        $data['bezirk_2']=Config::query()->where('option','bezirk_2')->value('value');
        $data['bezirk_3']=Config::query()->where('option','bezirk_3')->value('value');

        return view('statisch.organisation',['data'=>$data]);
    }

    public function anfahrt()
    {
        return view('statisch.anfahrt');
    }

    public function aufgaben()
    {
        $data['aufgaben_oben']=Config::query()->where('option','aufgaben_oben')->value('value');
        $data['deichschaefereien']=Config::query()->where('option','deichschaefereien')->value('value');
        $data['deichunterhaltung']=Config::query()->where('option','deichunterhaltung')->value('value');
        $data['katastrophenschutz']=Config::query()->where('option','katastrophenschutz')->value('value');
        return view('statisch.aufgaben',['data'=>$data]);
    }

    public function verbandsgebiet()
    {
        return view('statisch.verbandsgebiet');
    }

    public function impressum()
    {
        return view('statisch.impressum');
    }

    public function datenschutz()
    {
        return view('statisch.datenschutz');
    }

    public function satzung()
    {
        return view('statisch.satzung');
    }

    public function beitraege()
    {
        $beitrag = Config::query()->where('option', 'beitrag')->first();

        $beitagValue = $beitrag->value;
        return view('beitraege', ['beitrag' => $beitagValue]);
    }

    public function infoflyer()
    {
        return view('statisch.infoflyer');
    }

    public function buchreihe()
    {
        $input = 'buchreihe';
        $content = Config::query()->where('option', $input)->first();

        $content = $content->value;
        return view('statisch.'.$input,['content'=>$content]);
    }

    public function link()
    {
        $input = 'links';
        $content = Config::query()->where('option', $input)->first();

        $content = $content->value;
        return view('statisch.'.$input,['content'=>$content]);
    }
}
