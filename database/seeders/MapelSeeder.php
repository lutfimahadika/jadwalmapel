<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapels')->insert([
            "mata_pelajaran" => "PA dan BP",
            "jp" => 3,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "PA dan BP P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "PA dan BP P5",
            "jp" => 1,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Pend. Pancasila/PPKn",
            "jp" => 2,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Pend. Pancasila/PPKn P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Pend. Pancasila/PPKn P5",
            "jp" => 1,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Indonesia (Umum)",
            "jp" => 4,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Indonesia (Umum) P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Indonesia (Umum) P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Indonesia Tingkat Lanjut",
            "jp" => 4,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Indonesia Tingkat Lanjut P5",
            "jp" => 1,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa dan Sastra Indonesia (LM)",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Matematika (Umum)",
            "jp" => 4,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Matematika (Umum) P5",
            "jp" => 4,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Matematika Peminatan",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Matematika Tingkat Lanjut",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Matematika Tingkat Lanjut P5",
            "jp" => 1,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Inggris Umum",
            "jp" => 3,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa Inggris Tingkat Lanjut",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Bahasa dan Sastra Inggris (LM)",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "IPS",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sejarah Indonesia (Umum)",
            "jp" => 3,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sejarah Indonesia (Umum) P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sejarah Peminatan",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "IPS",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sejarah Tingkat Lanjut",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Seni (Musik, Rupa, Teater, Tari)",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Seni (Musik, Rupa, Teater, Tari) P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Seni dan Budaya (Musik, Rupa, Teater, Tari)",
            "jp" => 2,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Seni Budaya",
            "jp" => 2,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Prakarya (Budi Daya)",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Prakarya (Budi Daya) P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Prakarya dan Kewirausahaan",
            "jp" => 2,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Prakarya dan Kewirausahaan",
            "jp" => 2,
            "tingkat" => "3",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Pendidikan Jasmani dan Olahraga Kesehatan",
            "jp" => 3,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Pendidikan Jasmani dan Olahraga Kesehatan P5",
            "jp" => 1,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Pendidikan Jasmani dan Olahraga Kesehatan P5",
            "jp" => 1,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Muatan Lokal (Bahasa Sunda)",
            "jp" => 2,
            "tingkat" => null,
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Fisika",
            "jp" => 3,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Fisika",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Fisika (Pilihan Mapel)",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Kimia",
            "jp" => 3,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Kimia",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Kimia (Pilihan Mapel)",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Biologi",
            "jp" => 3,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Biologi",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Biologi (Pilihan Mapel)",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Biologi (LM)",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "IPS",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Geografi",
            "jp" => 3,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Geografi",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "IPS",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Geografi (Pilihan Mapel)",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Geografi (LM)",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sosiologi",
            "jp" => 3,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sosiologi",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "IPS",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sosiologi (Pilihan Mapel)",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Sosiologi (LM)",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "MIPA",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Ekonomi",
            "jp" => 4,
            "tingkat" => "3",
            "jurusan" => "IPS",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Ekonomi (Pilihan Mapel)",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Informatika",
            "jp" => 3,
            "tingkat" => "1",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mapels')->insert([
            "mata_pelajaran" => "Informatika",
            "jp" => 5,
            "tingkat" => "2",
            "jurusan" => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
