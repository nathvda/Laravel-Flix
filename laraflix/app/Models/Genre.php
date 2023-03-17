<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Video::class, 'genre_movies', 'genre_id', 'movie_id')->inRandomOrder()->limit(42);
    }

}
