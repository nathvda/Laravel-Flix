<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Video extends Model
{
    use HasFactory;

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'genre_movies', 'movie_id', 'genre_id');
    }

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'country_movies', 'movie_id', 'country_id');
    }

    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actors::class, 'actor_movies', 'movie_id', 'actor_id');
    }

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class, 'movie_profiles', 'movie_id', 'profile_id');
    }

}
