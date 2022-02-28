<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function number_of_likes()
    {
        return $this->hasMany(Like::class)->count();
    }

    public function number_of_views()
    {
        return $this->hasMany(View::class)->count();
    }
}
