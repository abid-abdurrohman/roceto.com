<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match_team extends Model
{
    protected $table = 'match_teams';
    protected $fillable = ['score', 'comment', 'participant_id', 'match_id'];

    public function participant() {
       return $this->belongsTo('App\Model\Participant');
    }

    public function match() {
       return $this->belongsTo('App\Model\Match');
    }

    public function match_score() {
    	 return $this->hasMany('App\Model\Match_score');
    }
}
