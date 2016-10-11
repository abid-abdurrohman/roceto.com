<?php

use Illuminate\Database\Seeder;

class StatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statistics = array(
          array(
            'participant_id' => '4',
            'rank_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'participant_id' => '3',
            'rank_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'participant_id' => '2',
            'rank_id' => '3',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'participant_id' => '13',
            'rank_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'participant_id' => '12',
            'rank_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'participant_id' => '11',
            'rank_id' => '3',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'participant_id' => '22',
            'rank_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'participant_id' => '21',
            'rank_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'participant_id' => '25',
            'rank_id' => '3',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),
        );
        // Comment the below to stop the seeder
        DB::table('statistics')->insert($statistics);
    }
}
