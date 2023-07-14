<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * Indicates if all mass assignment is enabled.
     */
    protected static $unguarded = true;

    /**
     * User who created the post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
