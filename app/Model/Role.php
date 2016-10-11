<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nama', 'deskripsi'];

    public function user() {
        return $this->belongsToMany('App\Model\User');
    }
}
