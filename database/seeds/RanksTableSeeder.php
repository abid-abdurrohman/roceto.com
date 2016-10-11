<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ranks = array(
        array(
          'title' => 'Juara 1',
          'deskripsi' => 'Juara pertama',
          'point' => '3',
          'created_at' => DB::raw('NOW()'),
          'updated_at' => DB::raw('NOW()'),
        ),array(
          'title' => 'Juara 2',
          'deskripsi' => 'Juara kedua',
          'point' => '2',
          'created_at' => DB::raw('NOW()'),
          'updated_at' => DB::raw('NOW()'),
        ),array(
          'title' => 'Juara 3',
          'deskripsi' => 'Juara ketiga',
          'point' => '1',
          'created_at' => DB::raw('NOW()'),
          'updated_at' => DB::raw('NOW()'),
        )
      );
      // Comment the below to stop the seeder
      DB::table('ranks')->insert($ranks);
    }
}
