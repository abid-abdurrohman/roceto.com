<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['comment', 'user_id', 'news_id'];

    public function user() {
    	 return $this->belongsTo('App\Model\User');
    }

    public function news() {
    	 return $this->belongsTo('App\Model\News');
    }
}
