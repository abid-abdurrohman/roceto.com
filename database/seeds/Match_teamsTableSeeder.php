<?php

use Illuminate\Database\Seeder;

class Match_teamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $match_teams = array(
         array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '1',
           'match_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '7',
           'match_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '2',
           'match_id' => '2',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '8',
           'match_id' => '2',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '3',
           'match_id' => '3',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '5',
           'match_id' => '3',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '4',
           'match_id' => '4',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '6',
           'match_id' => '4',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '1',
           'match_id' => '5',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '2',
           'match_id' => '5',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '3',
           'match_id' => '6',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '6',
           'match_id' => '6',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '1',
           'match_id' => '7',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'score' => '0',
           'comment' => 'Mesut Ozil (15:25)',
           'participant_id' => '3',
           'match_id' => '7',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         )
        //  ,array(
        //    'score' => '0',
        //    'comment' => 'Mesut Ozil (15:25)',
        //    'participant_id' => '1',
        //    'match_id' => '8',
        //    'created_at' => DB::raw('NOW()'),
        //    'updated_at' => DB::raw('NOW()'),
        //  )
       );
       // Comment the below to stop the seeder
       DB::table('match_teams')->insert($match_teams);
    }
}
