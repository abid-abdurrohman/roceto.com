<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['first_date', 'last_date', 'all_same', 'color', 'title'];
    protected $hidden = ['id'];
}
