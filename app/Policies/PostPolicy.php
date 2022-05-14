<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function author(User $user, Post $post)
    {
        return ($user->id === $post->user_id) ? true : false ;
    }

    public function published(? User $user, Post $post)
    {
        return ($post->status === 2) ? true : false ;
    }
}
