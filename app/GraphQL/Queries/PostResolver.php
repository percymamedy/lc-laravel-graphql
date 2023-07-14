<?php

namespace App\GraphQL\Queries;

use App\Models\Post;

final class PostResolver
{
    /**
     * Get a Post by slug
     */
    public function __invoke($_, array $args): ?Post
    {
        return Post::where('id', $args['id'])->first();
    }
}
