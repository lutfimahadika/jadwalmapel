<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class JadwalController extends Controller
{
    public function export()
    {
        $jadwal = Jadwal::with('pengampu','hari','jam')->get();
        $pdf = Pdf::loadview('jadwal.export', compact('jadwal'));
        return $pdf->download('Jadwal Mapel.pdf');
    }
}
