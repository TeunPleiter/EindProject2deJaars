<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'movie_id'
        ];

    public function user() {
        return $this->belongsTo(User::class);
    
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }   
}
