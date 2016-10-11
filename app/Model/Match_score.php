<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match_score extends Model
{
    protected $table = 'match_scores';
    protected $fillable = ['score', 'member_id', 'match_team_id'];

    public function match_team() {
       return $this->belongsTo('App\Model\Match_team');
    }

    public function member() {
       return $this->belongsTo('App\Model\Member');
    }
}
