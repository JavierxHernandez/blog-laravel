<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
