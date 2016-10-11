<?php

use Illuminate\Database\Seeder;

class Match_scoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $match_scores = array(
         array(
           'score' => '1',
           'member_id' => '1',
           'match_team_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '2',
           'member_id' => '2',
           'match_team_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '2',
           'member_id' => '20',
           'match_team_id' => '2',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '4',
           'match_team_id' => '3',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '6',
           'match_team_id' => '3',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '5',
           'match_team_id' => '3',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '3',
           'member_id' => '9',
           'match_team_id' => '5',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '13',
           'match_team_id' => '6',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '15',
           'match_team_id' => '6',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '17',
           'match_team_id' => '8',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '2',
           'match_team_id' => '9',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '1',
           'member_id' => '1',
           'match_team_id' => '9',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '2',
           'member_id' => '8',
           'match_team_id' => '11',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '3',
           'member_id' => '2',
           'match_team_id' => '13',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         )
       );
       // Comment the below to stop the seeder
       DB::table('match_scores')->insert($match_scores);
    }
}
