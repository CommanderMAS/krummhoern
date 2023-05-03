<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'intro',
        'content',
        'category',
        'topnews',
        'active',
        'date_from',
        'date_to',
    ];


    protected $hidden = [
    ];


    protected $table = 'aktuelles';
}
