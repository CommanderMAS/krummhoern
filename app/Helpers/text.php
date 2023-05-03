<?php


    function date_german($date): string
    {
        $datum=date('d.m.Y',strtotime($date));
        return($datum);
    }

    function count_projekte(): int
    {
        $projekte = \App\Models\Projekte::query()->where('active',1)->get();
        return count($projekte);
    }
