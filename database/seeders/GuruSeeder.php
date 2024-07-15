<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gurus')->insert([
            "no_duk" => 1,
            "nama_guru" => "Hj. Pupu Puspitasari, S.Pd, M.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 2,
            "nama_guru" => "Hj. Epi Sopiah, S.Pd, M.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 3,
            "nama_guru" => "H. Dudung, S.Pd, M.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 4,
            "nama_guru" => "H. Dede Iryanto, S.Pd., M.Pd.",
            "beban_mengajar" => 37,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 5,
            "nama_guru" => "Hj. Lina Rosalina, S.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 6,
            "nama_guru" => "Dra. Hj. Niknok Enok Nuraeni, M.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 7,
            "nama_guru" => "Ida Rosmawati, S.Pd, M.M",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 8,
            "nama_guru" => "Dra. Hj. Lela Nurlaila, M.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 9,
            "nama_guru" => "Drs.H. Aleh Soleh",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 10,
            "nama_guru" => "Dra. Diayuna",
            "beban_mengajar" => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 11,
            "nama_guru" => "H. Endang Solih, S.Pd, M.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 12,
            "nama_guru" => "Hj.Rina Damayanti, S.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 13,
            "nama_guru" => "Dr. Ida Farida Ningrum, M.Pd",
            "beban_mengajar" => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 14,
            "nama_guru" => "Ai Tintin S., S.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 15,
            "nama_guru" => "Dida Rupaida, S.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 16,
            "nama_guru" => "Dra. Olis, MM",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 17,
            "nama_guru" => "Mohamad Arif Hasan, S.Pd, M.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 18,
            "nama_guru" => "Asep Yadi Supriyadi, S.Pd, M.M",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 19,
            "nama_guru" => "Elin Rianah, S.Pd, M.M",
            "beban_mengajar" => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 20,
            "nama_guru" => "H.Apep Zenal Mustofa, M.Pd",
            "beban_mengajar" => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 21,
            "nama_guru" => "Hj. Sri Rahayu, S.Ag, M.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 22,
            "nama_guru" => "Kokon Sukron, S.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 23,
            "nama_guru" => "H.Tomi Bustomi, S.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 24,
            "nama_guru" => "Dian Nurhaeni, S.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 25,
            "nama_guru" => "Umaran RA, S.Pd",
            "beban_mengajar" => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 26,
            "nama_guru" => "Hj. Eneng Purwanti, S.Si, M.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        DB::table('gurus')->insert([
            "no_duk" => 27,
            "nama_guru" => "Euis Ina Nurdiana, S.Pd. M.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 28,
            "nama_guru" => "Dr. Agus Ahmad Wakih, M.Sn",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('gurus')->insert([
            "no_duk" => 29,
            "nama_guru" => "Deti Rismayati, SP, M.M",
            "beban_mengajar" => 38,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 30,
            "nama_guru" => "Neni Nurachman, S.Pd, Si, M.M",
            "beban_mengajar" => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 31,
            "nama_guru" => "Didin Mukromin, S.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 32,
            "nama_guru" => "Tri Ady Indrawan, S.Pd.",
            "beban_mengajar" => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 33,
            "nama_guru" => "Hj.Ai Titin, S.Pd, M.Pd",
            "beban_mengajar" => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 34,
            "nama_guru" => "Hj.Dewi Suryaningsih, S.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 35,
            "nama_guru" => "Hj.Ade Erni, S.Ag, M.Si",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 36,
            "nama_guru" => "Ade Risna Suhendi, S.Pd, M.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 37,
            "nama_guru" => "Fuji Rianti, M.Pd.",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 38,
            "nama_guru" => "Oon Noviani, S.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 39,
            "nama_guru" => "Muslimat Nurul Fitri, S.Pd.",
            "beban_mengajar" => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('gurus')->insert([
            "no_duk" => 40,
            "nama_guru" => "Barkah Agus Salam, S.Pd",
            "beban_mengajar" => 34,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 41,
            "nama_guru" => "Anggi Dwi Ramdani, S.Pd",
            "beban_mengajar" => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 42,
            "nama_guru" => "Dinda Siti Saodah, S.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 43,
            "nama_guru" => "Deni Kurniawan, S.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 44,
            "nama_guru" => "Nurjamil, S.Sos.",
            "beban_mengajar" => 29,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 45,
            "nama_guru" => "Suci Inayati, S.Pd.",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 46,
            "nama_guru" => "R. Gunggung Firmansyah, S.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 47,
            "nama_guru" => "Ima Nurmayatin, S.Pd.I,M.Pd.I",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 48,
            "nama_guru" => "Tantan Munawar, S.Pd",
            "beban_mengajar" => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 49,
            "nama_guru" => "Yusi Ayu Martiyan, S.Pd",
            "beban_mengajar" => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 50,
            "nama_guru" => "Rina Anggraeni, S.Pd, M.Pd.",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 51,
            "nama_guru" => "Shinta Fitriani, S.Pd",
            "beban_mengajar" => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 52,
            "nama_guru" => "Salis Nelul Janah, S.Pd.",
            "beban_mengajar" => 38,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 53,
            "nama_guru" => "Farinda Sucianty,S.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 54,
            "nama_guru" => "Ita Astriyani, S.Pd",
            "beban_mengajar" => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 55,
            "nama_guru" => "Anisa Nurasiah, S.Pd",
            "beban_mengajar" => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 56,
            "nama_guru" => "Desi Intan Permani, S.Pd",
            "beban_mengajar" => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 57,
            "nama_guru" => "Desty Rosmiyati Dewi, S.Pd",
            "beban_mengajar" => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 58,
            "nama_guru" => "Euis Nur Fadilah, S.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 59,
            "nama_guru" => "Syifa Auliya, S.Pd",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 60,
            "nama_guru" => "Suci Anggawati Sari, S.Pd",
            "beban_mengajar" => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 61,
            "nama_guru" => "Dida Firman Hidayat, M.Pd",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 62,
            "nama_guru" => "Hj. Eni Nuraeni, S.Pd., M.Pd.",
            "beban_mengajar" => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 63,
            "nama_guru" => "Abdal Aziz, S.Pd.I",
            "beban_mengajar" => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        DB::table('gurus')->insert([
            "no_duk" => 64,
            "nama_guru" => "Inggit Wildani Kahfi, S.Pd.",
            "beban_mengajar" => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gurus')->insert([
            "no_duk" => 65,
            "nama_guru" => "Sherly Lucia, S.Sn.",
            "beban_mengajar" => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
