<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jadwalseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jadwals')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'nama' => 'Pemrograman Web',
            'hari' => 'Senin',
            'jam' => '07.00 - 09.00',
            'ruangan' => 'R. 101',
            'dosen' => 'Rizal',
        ]);
    }
}
