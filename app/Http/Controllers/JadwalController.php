<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;


class JadwalController extends Controller
{
    public function export()
    {
        $pdf = Pdf::loadview('jadwal.export');
        return $pdf->download('Jadwal Mapel.pdf');
    }
}
