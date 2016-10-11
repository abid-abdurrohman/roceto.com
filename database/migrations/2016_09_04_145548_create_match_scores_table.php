<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score');
            $table->integer('member_id')->unsigned()->index();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->integer('match_team_id')->unsigned()->index();
            $table->foreign('match_team_id')->references('id')->on('match_teams')->onDelete('cascade');
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
        Schema::drop('match_scores');
    }
}
