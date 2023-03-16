<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieView extends Model
{
    use HasFactory;

    protected $table = 'movie_views';

    protected $fillable = [
        'profile_id',
        'movie_id'
    ];
}
