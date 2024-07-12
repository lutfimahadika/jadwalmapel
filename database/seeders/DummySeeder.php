<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=498; $i < 9500; $i++) {
            User::create([
                'name' => 'User ke '.$i,
                'email' => 'user'.$i.'@gmail.com',
                'password' => Hash::make('inipassword'),
            ]);
        }

    }
}
