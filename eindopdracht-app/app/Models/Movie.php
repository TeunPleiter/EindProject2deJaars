<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = true; // This property should be true by default

    protected $fillable = [
        'movie_type',
        'title',
        'year',
        'minutes'
    ];

}
