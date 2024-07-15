<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            ['nama_kelas' => 'X-1', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-2', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-3', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-4', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-5', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-6', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-7', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-8', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-9', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-10', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-11', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'X-12', 'tingkat' => 1, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-1', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-2', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-3', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-4', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-5', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-6', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-7', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-8', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-9', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-10', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-11', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XI-12', 'tingkat' => 2, 'jurusan' => '', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 1', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 2', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 3', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 4', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 5', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 6', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 7', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-MIPA 8', 'tingkat' => 3, 'jurusan' => 'MIPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-IPS 1', 'tingkat' => 3, 'jurusan' => 'IPS', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-IPS 2', 'tingkat' => 3, 'jurusan' => 'IPS', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-IPS 3', 'tingkat' => 3, 'jurusan' => 'IPS', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'XII-IPS 4', 'tingkat' => 3, 'jurusan' => 'IPS', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('kelas')->insert($kelas);
    }
}
