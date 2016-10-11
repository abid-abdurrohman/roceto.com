<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
	protected $table = 'pemasukan';
	protected $fillable = ['nama', 'jumlah', 'participant_id', 'event_id', 'jumlah'];

	public function participant(){
		return $this->hasMany('App\Model\Participant');
	}

	public function event(){
		return $this->hasMany('App\Model\Event');
	}
}