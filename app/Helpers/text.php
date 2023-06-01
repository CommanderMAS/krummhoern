<?php


use App\Models\Projekte;

function date_german($date): string
    {
        $datum=date('d.m.Y',strtotime($date));
        return($datum);
    }

    function count_projekte(): int
    {
        $today = today()->format('Y-m-d');
        $projekte = Projekte::query()->where('date_to', '>=', $today)->orWhere('date_to',null)->where('active',1)->get();
        return count($projekte);
    }

    function get_sliders():array
    {

        $dir    = public_path().'/assets/img/slide/';
        $files1 = scandir($dir);
        $sliderPaths = [];
        foreach ($files1 as $key=>$file){
            if ($key<2){
                continue;
            }
            $sliderPaths[]='assets/img/slide/'.$file;
        }
        return $sliderPaths;

    }
