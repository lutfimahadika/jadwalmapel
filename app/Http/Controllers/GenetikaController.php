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
        $populasi = 10;
        $crossOver = 0.7;
        $mutasi = 0.01;

        $genetika = new Genetika($populasi, $crossOver, $mutasi);

        $genetika->AmbilData();

        $genetika->Inisialisai();

        $fitness = $genetika->HitungFitness();
        $genetika->Seleksi($fitness);
        $genetika->StartCrossOver();
        $fitness = $genetika->Mutasi();

        $best_individual_index = array_keys($fitness, max($fitness))[0];
        $best_individual = $genetika->GetIndividu($best_individual_index);

        foreach($best_individual as $datas) {
            $dataToInsert = [
                'mapel_id' => $datas['mapel'],
                'guru_id' => $datas['pengampu'],
                'kelas_id' => $datas['ruang'],
                'hari_id' => $datas['hari'],
                'jam_id' => $datas['jam'],
            ];
            Jadwal::insert($dataToInsert);
        }

        $schedules = Jadwal::with('jam')
        ->orderBy('kelas_id')
        ->orderBy('hari_id')
        ->orderBy('jam_id')
        ->orderBy('mapel_id')
        ->get();
        return view('genetika.index', ['schedules' => $schedules]);
    }
}
