<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    protected $fillable = ['no_match', 'nama', 'waktu', 'tempat', 'status', 'youtube', 'deskripsi', 'event_id'];

    public function event() {
       return $this->belongsTo('App\Model\Event');
    }

    public function match_team() {
    	 return $this->hasMany('App\Model\Match_team');
    }
}
