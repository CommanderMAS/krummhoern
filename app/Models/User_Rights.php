<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Rights extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'name',
        'power',
    ];


    protected $hidden = [
    ];


    protected $table = 'user_rights';
}
