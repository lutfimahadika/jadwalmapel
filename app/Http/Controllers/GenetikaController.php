<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Genetika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenetikaController extends Controller
{
    public function index()
    {
        // Set time limit to avoid script timeout
        set_time_limit(0);

        // Genetic algorithm parameters
        $populasi = 30;
        $crossOver = 0.90;
        $mutasi = 0.30;
        $jumlah_generasi = 10;

        // Initialize genetic algorithm
        $genetik = new Genetika(
            $populasi,
            $crossOver,
            $mutasi
        );
        $genetik->AmbilData();
        $genetik->Inisialisai();

        // Initialize variables
        $found = false;
        $response['status'] = false;

        // Loop through generations
        for ($i = 0; $i < $jumlah_generasi; $i++) {
            $fitness = $genetik->HitungFitness();

            // Selection and crossover
            $genetik->Seleksi($fitness);
            $genetik->StartCrossOver();

            // Mutation process
            $fitnessAfterMutation = $genetik->Mutasi();

            // Check if a valid solution is found
            for ($j = 0; $j < count($fitnessAfterMutation); $j++) {
                if ($fitnessAfterMutation[$j] == 1) {
                    // Truncate table using Laravel DB facade
                    DB::table('jadwals')->truncate();

                    // Retrieve and insert the schedule into the database
                    $jadwal_kuliah = $genetik->GetIndividu($j);

                    foreach ($jadwal_kuliah as $jadwal) {
                        DB::table('jadwals')->insert([
                            'id_pengampu' => intval($jadwal[0]),
                            'id_jam' => intval($jadwal[1]),
                            'id_hari' => intval($jadwal[2]),
                            'id_ruang' => intval($jadwal[3]),
                            'kelas' => $jadwal[4],
                        ]);
                    }

                    // Send successful response
                    $response['status'] = true;
                    echo json_encode($response);

                    // Break out of loops since solution is found
                    $found = true;
                    break;
                }
            }

            if ($found) {
                break;
            }
        }

        // If no solution is found, send failure response
        if (!$found) {
            $response['status'] = 'gagal';
            echo json_encode($response);
        }
    }
}
