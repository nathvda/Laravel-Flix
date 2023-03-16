<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieProfile extends Model
{
    use HasFactory;

    protected $table = 'movie_profiles';

    protected $fillable = [
        'profile_id',
        'movie_id'
    ];
}
