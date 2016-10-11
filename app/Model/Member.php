<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['nama', 'jk', 'tgl_lhr', 'no_hp', 'posisi', 'no_punggung', 'foto', 'participant_id'];

    public function participant() {
       return $this->belongsTo('App\Model\Participant');
    }

    public function match_score() {
         return $this->hasMany('App\Model\Match_score');
    }
}
