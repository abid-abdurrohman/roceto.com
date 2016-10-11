<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_pembayaran', function (Blueprint $table){
            $table->increments('id');
            $table->string('atas_nama');
            $table->string('no_rek');
            $table->string('bank');
            $table->text('thumbnail');
            $table->integer('participant_id')->unsigned()->index();
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
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
        Schema::drop('bukti_pembayaran');
    }
}
