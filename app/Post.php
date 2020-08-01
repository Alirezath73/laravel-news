<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = [
        'title', 'slug', 'author_id', 'short_description', 'long_description', 'status'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
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
