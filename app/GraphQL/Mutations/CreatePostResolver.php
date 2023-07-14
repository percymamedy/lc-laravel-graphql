<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Arr;

final class CreatePostResolver
{
    /**
     * Create a Post.
     */
    public function __invoke($_, array $args): Post
    {
        logger()->info('Sending email');

        return Post::create(
            Arr::only($args, ['user_id', 'title', 'body'])
        );
    }
}
