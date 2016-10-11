<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = array(
        	array(
        		'judul' => 'Kejuaraan Futsal',
        		'deskripsi' => 'Selamat atas kejuaraan FC Barcelona',
        		'thumbnail' => 'images/gallery/1/038963900_1470704287-20160808-Eko-Yuli-Irawan-Persembahkan-Medali-Perak-Reuters-2.jpg',
        		'event_id' => '1',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => 'Kejuaraan Basket',
        		'deskripsi' => 'Selamat atas kejuaraan Basket',
        		'thumbnail' => 'images/gallery/2/058301400_1447427151-20151113-WKF_World_Junior_Championships2015-Faqih_Karomi__galeri__-_HEL_4.jpg',
        		'event_id' => '2',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => ' Kejuaraan Bulu Tangkis',
        		'deskripsi' => ' YUHUU MENANG',
        		'thumbnail' => 'images/gallery/3/bultanggg.jpg',
        		'event_id' => '3',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => 'Kejuaraan Renang',
        		'deskripsi' => ' Asik menang',
        		'thumbnail' => 'images/gallery/5/2126488620X310.JPG',
        		'event_id' => '5',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => 'Keseruan Voli',
        		'deskripsi' => 'Aksi dari pemain yang tak disangka',
        		'thumbnail' => 'images/gallery/4/antarafoto-Final-Bola-Voli-211213-wsj-2.jpg',
        		'event_id' => '4',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => 'Lari Cepat Siti mempesona',
        		'deskripsi' => ' amazing',
        		'thumbnail' => 'images/gallery/6/093217200_1433859357-20150609AB_Triyaningsih02.jpg',
        		'event_id' => '6 ',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => 'Terbiasa Main Karet',
        		'deskripsi' => 'Lompat yang tinggi',
        		'thumbnail' => 'images/gallery/7/lompat-tinggi.jpg',
        		'event_id' => '7 ',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	),array(
        		'judul' => 'Bermain Logika',
        		'deskripsi' => 'permaianan mengasah otak',
        		'thumbnail' => 'images/gallery/8/IMG-20140206-WA0021-642x336.jpg',
        		'event_id' => '8',
        		'created_at' => DB::raw('NOW()'),
        		'updated_at' => DB::raw('NOW()'),
        	)
        );
        // Comment the below to stop the seeder
        DB::table('galleries')->insert($galleries);
    }
}
