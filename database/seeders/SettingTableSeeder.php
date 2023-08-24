<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Warung Ku',
            'alamat' => 'Jl. Diponegoro WringinAgung Ds.Jatisari ',
            'telepon' => '082124324944',
            'tipe_nota' => 1, // kecil
            'path_logo' => '/img/warung.png',
        ]);
    }
}
