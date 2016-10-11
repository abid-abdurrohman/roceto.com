<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsors';
    protected $fillable = ['nama_pt', 'alamat_pt', 'no_hp_pt', 'email_pt', 'website_pt', 'foto_pt', 'nama_cp', 'job_title_cp',
      'no_hp_cp', 'email_cp'];
}
