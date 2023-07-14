<?php

namespace App\GraphQL\Queries;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

final class PostsResolver
{
    /**
     * Get all Posts.
     */
    public function __invoke($_, array $args): Collection
    {
        return Post::latest()->get();
    }
}
