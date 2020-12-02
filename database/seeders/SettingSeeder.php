<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker; 

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'slide1' => '',
            'slide2' => '',
            'slide3' => '',
            'title' => 'PT.Karya Maritim Indonesia',
            'caption' => 'Solusi jasa pengiriman barang ke Banyuwangi dan bali.',
            'section1' => 'PT.Karya Maritim Indonesia adalah sebuah perusahaan yang memberikan layanan untuk pengiriman dan penyeberangan dengan menggunakan kapal. ',
            'section2' => 'Kami telah memberikan layanan sejak tahun 2000 dan memberikan layanan jasa penyeberangan ke beberapa pulau diindonesia. ',
            'titlenav' => 'PT.Karya Maritim Indonesia'
        ]);
    }
}
