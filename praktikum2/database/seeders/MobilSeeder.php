<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mobils')->insert([
            ['merk' => 'Toyota', 'model' => 'Avanza', 'tahun' => 2020],
            ['merk' => 'Honda', 'model' => 'Civic', 'tahun' => 2021],
            ['merk' => 'Mitsubishi', 'model' => 'Xpander', 'tahun' => 2019],
        ]);
    }
}
