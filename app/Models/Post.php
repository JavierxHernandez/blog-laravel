<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * > The user() function returns the user that owns the post
     *
     * @return A collection of all the answers for the question.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The `category()` function returns the category that the post belongs to
     *
     * @return The category that the post belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A post can have many tags, and a tag can have many posts.
     *
     * @return A collection of tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
