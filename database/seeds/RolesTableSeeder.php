<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
          array(
            'nama' => 'User',
            'deskripsi' => 'A Normal User',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Author',
            'deskripsi' => 'An Author',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Admin',
            'deskripsi' => 'An Admin',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('roles')->insert($roles);
    }
}
