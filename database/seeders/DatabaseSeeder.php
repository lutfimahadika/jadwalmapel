<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            GuruSeeder::class,
            MapelSeeder::class,
            KelasSeeder::class,
            HariSeeder::class,
            JamSeeder::class,
            guru_mata_pelajaranSeeder::class
        ]);
    }
}
