<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score');
            $table->text('comment');
            $table->string('status');
            $table->integer('participant_id')->unsigned()->index();
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
            $table->integer('match_id')->unsigned()->index();
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');
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
        Schema::drop('match_teams');
    }
}
