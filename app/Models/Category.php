<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * > The posts() function returns all the posts that belong to the user
     *
     * @return A collection of Post objects.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
