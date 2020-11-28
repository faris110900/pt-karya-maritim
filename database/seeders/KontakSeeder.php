<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontaks')->insert([
            'address' => 'JL.Gatot Subroto (Ruko Ketapang Blok A-3)',
            'phone1' => '(0333)4460297',
            'phone2' => '(0333) 4466889',
            'email' => 'info@example.com'
        ]);
    }
}
