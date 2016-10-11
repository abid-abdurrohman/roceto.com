<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['judul', 'deskripsi', 'thumbnail', 'event_id'];

    public function event() {
       return $this->belongsTo('App\Model\Event');
    }
}
