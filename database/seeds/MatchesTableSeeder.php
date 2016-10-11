<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = array(
         array(
           'no_match' => '1',
           'nama' => 'Match 1',
           'waktu' => '2016-09-10',
           'tempat' => 'Depok',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=rKJ_1uRfyuA',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '1',
           'nama' => 'Match 2',
           'waktu' => '2016-09-10',
           'tempat' => 'Jakarta',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=gbzuImQrIgo',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '1',
           'nama' => 'Match 3',
           'waktu' => '2016-09-11',
           'tempat' => 'Bandung',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=PIlFyXucIhw',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '1',
           'nama' => 'Match 4',
           'waktu' => '2016-09-11',
           'tempat' => 'Karawang',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=mx6t6E24SSM',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '2',
           'nama' => 'Match 5',
           'waktu' => '2016-09-13',
           'tempat' => 'Cibinong',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=mx6t6E24SSM',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '2',
           'nama' => 'Match 6',
           'waktu' => '2016-09-13',
           'tempat' => 'Bogor',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=mx6t6E24SSM',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '3',
           'nama' => 'Match 7',
           'waktu' => '2016-09-15',
           'tempat' => 'Cilodong',
           'status' => 'available',
           'youtube' => 'https://www.youtube.com/watch?v=mx6t6E24SSM',
           'deskripsi' => '<p>Please welcome</p>',
           'event_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         )
        //  ,array(
        //    'no_match' => '4',
        //    'nama' => 'Match 8',
        //    'waktu' => '2016-09-16',
        //    'tempat' => 'Cikini',
        //    'status' => 'available',
        //    'youtube' => 'https://www.youtube.com/watch?v=mx6t6E24SSM',
        //    'deskripsi' => '<p>Please welcome</p>',
        //    'event_id' => '1',
        //    'created_at' => DB::raw('NOW()'),
        //    'updated_at' => DB::raw('NOW()'),
        //  )
       );
       // Comment the below to stop the seeder
       DB::table('matches')->insert($matches);
    }
}
