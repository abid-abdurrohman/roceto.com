<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['judul', 'deskripsi', 'kategori', 'author', 'slug', 'thumbnail'];

    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag')->withTimestamps();
    }

    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }

    public function comment() {
         return $this->hasMany('App\Model\Comment');
    }
}
