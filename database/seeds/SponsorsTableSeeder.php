<?php

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsors = array(
          array(
            'nama_pt' => 'PT Aqua Golden Mississippi Tbk',
            'alamat_pt' => 'Indonesia',
            'no_hp_pt' => '021-8847338',
            'email_pt' => 'admin@aqua.com',
            'website_pt' => 'www.aqua.com',
            'foto_pt' => 'images\sponsor\aqua.jpg',
            'nama_cp' => 'Fahri Ando Putra',
            'job_title_cp' => 'Manager Produksi',
            'no_hp_cp' => '089938273342',
            'email_cp' => 'fahri@aqua.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_pt' => 'Danone Inc.',
            'alamat_pt' => 'Indonesia',
            'no_hp_pt' => '021-8847338',
            'email_pt' => 'admin@danone.com',
            'website_pt' => '	www.danone.com',
            'foto_pt' => 'images\sponsor\danone.jpg',
            'nama_cp' => 'Fahri Ando Putra',
            'job_title_cp' => 'Manager Produksi',
            'no_hp_cp' => '089938273342',
            'email_cp' => 'fahri@danone.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_pt' => 'Nike Inc.',
            'alamat_pt' => 'Indonesia',
            'no_hp_pt' => '021-8847338',
            'email_pt' => 'admin@nike.com',
            'website_pt' => 'www.nike.com',
            'foto_pt' => 'images\sponsor\nike.jpg',
            'nama_cp' => 'Fahri Ando Putra',
            'job_title_cp' => 'Manager Produksi',
            'no_hp_cp' => '089938273342',
            'email_cp' => 'fahri@nike.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_pt' => 'Pocari Sweat Inc.',
            'alamat_pt' => 'Indonesia',
            'no_hp_pt' => '021-8847338',
            'email_pt' => 'admin@pocarisweat.com',
            'website_pt' => 'www.pocarisweat.co.id',
            'foto_pt' => 'images\sponsor\pocarisweat.jpg',
            'nama_cp' => 'Fahri Ando Putra',
            'job_title_cp' => 'Manager Produksi',
            'no_hp_cp' => '089938273342',
            'email_cp' => 'fahri@pocarisweat.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_pt' => 'PT. Nippon Indosari Corpindo - Sari Roti',
            'alamat_pt' => 'Indonesia',
            'no_hp_pt' => '021-8847338',
            'email_pt' => 'admin@sariroti.com',
            'website_pt' => 'www.sariroti.com',
            'foto_pt' => 'images\sponsor\sariroti.jpg',
            'nama_cp' => 'Fahri Ando Putra',
            'job_title_cp' => 'Manager Produksi',
            'no_hp_cp' => '089938273342',
            'email_cp' => 'fahri@sariroti.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_pt' => 'PT YAKULT INDONESIA PERSADA',
            'alamat_pt' => 'Indonesia',
            'no_hp_pt' => '021-8847338',
            'email_pt' => 'admin@yakult.com',
            'website_pt' => 'www.yakult.co.id',
            'foto_pt' => 'images\sponsor\yakult.jpg',
            'nama_cp' => 'Fahri Ando Putra',
            'job_title_cp' => 'Manager Produksi',
            'no_hp_cp' => '089938273342',
            'email_cp' => 'fahri@yakult.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('sponsors')->insert($sponsors);
    }
}
