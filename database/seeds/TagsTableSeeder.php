<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = array(
        	array(
	        	'nama' => 'futsal',                       
	        	'created_at' => DB::raw('NOW()'),            
	        	'updated_at' => DB::raw('NOW()'),
	        ),array(
	        	'nama' => 'basket',                       
	        	'created_at' => DB::raw('NOW()'),            
	        	'updated_at' => DB::raw('NOW()'),
	        ),array(
	        	'nama' => 'bultang',                       
	        	'created_at' => DB::raw('NOW()'),            
	        	'updated_at' => DB::raw('NOW()'),
	        ),array(
	        	'nama' => 'voli',                       
	        	'created_at' => DB::raw('NOW()'),            
	        	'updated_at' => DB::raw('NOW()'),
	        ),array(
	        	'nama' => 'berenang',                       
	        	'created_at' => DB::raw('NOW()'),            
	        	'updated_at' => DB::raw('NOW()'),
	        )
        );              
        // Comment the below to stop the seeder        
        DB::table('tags')->insert($tags); 
    }
}
