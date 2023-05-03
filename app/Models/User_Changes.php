<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Changes extends Model
{
    use HasFactory;

    protected $fillable = [
        'iban',
        'sonstiges',
        'vorname',
        'nachname',
        'strasse',
        'plz',
        'ort',
        'email',
        'einzug',
        'kontoinhaber'
    ];

    protected $hidden = [
    ];


    protected $table = 'changed_data';
}
