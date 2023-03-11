<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailprofilseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_profiles')->insert([
            'address' => 'Jl. Raya Cibaduyut No. 1',
            'phone' => '08123456789',
            'birth_date' => '2000-01-01',
            'foto' => 'foto.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
