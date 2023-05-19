<?php

namespace Database\Seeders;

use App\Models\PengalamanKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengalamanKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            PengalamanKerja::insert([
                'nama' => 'PT. Sinar Jaya '. $i,
                'jabatan' => 'Staff IT',
                'tahun_masuk' => '2019',
                'tahun_keluar' => '2020',
            ]);
        }
    }
}
