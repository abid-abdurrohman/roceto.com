<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    protected $fillable = ['id', 'nama_tim', 'logo_tim', 'no_hp', 'warna_kostum', 'status', 'event_id',
        'user_id'];

    public function event() {
       return $this->belongsTo('App\Model\Event');
    }

    public function member() {
    	 return $this->hasMany('App\Model\Member');
    }

    public function match() {
    	 return $this->hasMany('App\Model\Match');
    }

    public function bukti_pembayaran(){
        return $this->hasOne('App\Model\BuktiPembayaran');
    }

    public function users(){
        return $this->belongsTo('App\Model\User');
    }

    public function pemasukan(){
        return $this->belongsTo('App\Model\Pemasukan');
    }

    public function statistic() {
         return $this->hasOne('App\Model\Statistic');
    }
}
