<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'username',
        'avatar_id',
        'user_id'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function avatar(): HasOne
    {
        return $this->hasOne(Avatar::class, 'id', 'avatar_id');
    }

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Video::class, 'movie_profiles', 'profile_id', 'movie_id');
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class, 'profile_id', 'id');
    }

    public function isLiked($profile, $movie){
        if(count($this->likes->where('profile_id', $profile)->where('movie_id', $movie)) > 0){
            return true;
        } else {
        return false;
    }
}

    public function dislikes(): HasMany
    {
        return $this->hasMany(Dislike::class, 'profile_id', 'id');
    }

    public function isDisliked($profile, $movie){
        if(count($this->dislikes->where('profile_id', $profile)->where('movie_id', $movie)) > 0){
            return true;
        } else {
        return false;
    }

    }
}
