<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = 'statistics';
    protected $fillable = ['participant_id', 'rank_id'];

    public function participant(){
        return $this->belongsTo('App\Model\Participant');
    }

    public function rank(){
        return $this->hasOne('App\Model\Rank');
    }
}
