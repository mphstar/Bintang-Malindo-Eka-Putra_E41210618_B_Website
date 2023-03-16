<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama = ["bintang", "mphstar", "raider", "shogun", "ayaya", "hutao", "yoimiya", "nahida"];
        //
        // Loop data untuk insert ke database
        for ($i = 0; $i < count($nama); $i++) {
            # code...
            // insert data ke table detail profile
            DB::table('detail_profile')->insert([
                'address' => $nama[$i],
                'nomor_tlp' => '08xxxxxx',
                'ttl' => '2002-07-09',
                'foto' => 'Picture ' . $i . '.png'
            ]);
        }
    }
}
