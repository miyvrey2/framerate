<?php

use App\Models\Post;
use function Pest\Laravel\get;

it('can show a post', function() {
    $post = Post::factory()->create();

    get(route('posts.show', $post))
        ->assertComponent('Posts/Show');
});

it('passes a test to the view', function() {
    $post = Post::factory()->create();

    $post->load('user');

    get(route('posts.show', $post))
        ->assertHasResource('post', \App\Http\Resources\PostResource::make($post));
});

