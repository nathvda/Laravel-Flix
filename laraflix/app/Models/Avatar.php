<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Avatar extends Model
{
    use HasFactory;

    protected $table = 'avatars';

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'avatar_id', 'id');
    }
}
