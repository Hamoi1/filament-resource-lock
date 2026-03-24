<?php

use Blendbyte\FilamentResourceLock\Models\ResourceLock;
use Blendbyte\FilamentResourceLock\Tests\Resources\Models\Post;
use Blendbyte\FilamentResourceLock\Tests\Resources\Models\User;
use Blendbyte\FilamentResourceLock\Tests\TestCase;
use Carbon\Carbon;

uses(TestCase::class)->in(__DIR__);

function createPost(): Post
{
    $post = (new Post)->forceFill([
        'title' => fake()->paragraph,
        'slug' => fake()->slug,
        'body' => fake()->text,
    ]);
    $post->save();

    return $post;
}

function createUser(): User
{
    $user = (new User)->forceFill([
        'name' => fake()->name,
        'email' => fake()->email,
    ]);

    $user->save();

    return $user;
}

function createExpiredResourceLock(User $user, Post $post): ResourceLock
{
    $resourceLock = (new ResourceLock)->forceFill([
        'updated_at' => Carbon::now()->subMinutes(30),
        'user_id' => $user->id,
        'lockable_type' => 'Blendbyte\FilamentResourceLock\Tests\Resources\Models\Post',
        'lockable_id' => $post->id,
    ]);

    $resourceLock->save();

    return $resourceLock;
}

function createActiveResourceLock($user, $post): ResourceLock
{
    $resourceLock = (new ResourceLock)->forceFill([
        'updated_at' => Carbon::now(),
        'user_id' => $user->id,
        'lockable_type' => 'Blendbyte\FilamentResourceLock\Tests\Resources\Models\Post',
        'lockable_id' => $post->id,
    ]);

    $resourceLock->save();

    return $resourceLock;
}
