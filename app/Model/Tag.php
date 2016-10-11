<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['nama'];
    
    public function news()
    {
      return $this->belongsToMany('App\Model\News');
    }
}
