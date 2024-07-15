<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jams')->insert([
            'jam_awal' => '06:45',
            'jam_akhir' => '07:45',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '07:45',
            'jam_akhir' => '08:30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '08:30',
            'jam_akhir' => '09:15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '09:30',
            'jam_akhir' => '10:15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '10:15',
            'jam_akhir' => '11:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '11:00',
            'jam_akhir' => '11:45',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '12:15',
            'jam_akhir' => '13:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '13:00',
            'jam_akhir' => '13:45',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '13:45',
            'jam_akhir' => '14:30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jams')->insert([
            'jam_awal' => '14:30',
            'jam_akhir' => '15:15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
