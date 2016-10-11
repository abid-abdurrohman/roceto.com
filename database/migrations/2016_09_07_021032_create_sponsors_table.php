<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pt');
            $table->text('alamat_pt');
            $table->string('no_hp_pt');
            $table->string('email_pt');
            $table->text('website_pt');
            $table->text('foto_pt');
            $table->string('nama_cp');
            $table->string('job_title_cp');
            $table->string('no_hp_cp');
            $table->string('email_cp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sponsors');
    }
}
