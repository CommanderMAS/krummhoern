<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

    protected $fillable = [
        'option',
        'value'
    ];

    protected $hidden = [
    ];


    protected $table = 'config';
}
