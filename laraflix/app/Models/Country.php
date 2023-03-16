<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Video::class, 'country_movies', 'country_id', 'movie_id')->inRandomOrder()->limit(42);
    }

}
