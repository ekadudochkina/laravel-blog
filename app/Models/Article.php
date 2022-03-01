<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * Тэги статьи
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    /**
     * Комментарии статьи
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Количество лайков
     * @return int
     */
    public function number_of_likes()
    {
        return $this->hasMany(Like::class)->count();
    }

    /**
     * Количество просмотров
     * @return int
     */
    public function number_of_views()
    {
        return $this->hasMany(View::class)->count();
    }
}
