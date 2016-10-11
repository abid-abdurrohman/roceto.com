<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nick_name', 'email', 'mobile', 'password', 'avatar', 'background', 'activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment() {
         return $this->hasMany('App\Model\Comment');
    }

    public function participants() {
         return $this->hasMany('App\Model\Participants');
    }

    public function role() {
        return $this->belongsToMany('App\Model\Role')->withTimestamps();
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
           foreach ($roles as $role) {
              if ($this->hasRole($role)) {
                 return true;
              }
           }
        } else {
            if ($this->hasRole($roles)) {
               return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
       if ($this->role()->where('nama', $role)->first()) {
          return true;
       }
       return false;
    }
}
