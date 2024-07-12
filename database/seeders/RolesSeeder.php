<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::updateOrCreate(['name' => 'admin'],
                             ['name' => 'admin']);
        Role::updateOrCreate(['name' => 'writer'],
                             ['name' => 'writer']);
        Role::updateOrCreate(['name' => 'guest'],
                             ['name' => 'guest']);
    }
}
