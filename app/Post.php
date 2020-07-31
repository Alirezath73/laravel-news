<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'slug', 'author_id', 'short_description', 'long_description', 'status'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Category::class);
    }

    public function images()
    {
        return $this->hasMany(\App\Image::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
}
