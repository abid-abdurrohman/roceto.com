<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['nama', 'detail', 'thumbnail', 'peraturan', 'biaya_pendaftaran', 'kuota'];

    public function gallery() {
    	 return $this->hasMany('App\Model\Gallery');
    }

    public function match() {
    	 return $this->hasMany('App\Model\Match');
    }

    public function pemasukan() {
    	 return $this->belongsTo('App\Model\Pemasukan');
    }
}
