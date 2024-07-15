<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('haris')->insert([
            'nama_hari' => 'Senin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('haris')->insert([
            'nama_hari' => 'Selasa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('haris')->insert([
            'nama_hari' => 'Rabu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('haris')->insert([
            'nama_hari' => 'Kamis',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('haris')->insert([
            'nama_hari' => 'Jumat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
