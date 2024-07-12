<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EnkripsiController extends Controller
{
    public function enkripsi(Request $request){
        $string = "saya suka sate padang";
        $enkripsi = Crypt::encryptString($string);
        $deskripsi = Crypt::decryptString($enkripsi);


        echo "string : " . $string;
        echo "hasil enkripsi : " . $enkripsi . "<br><br>";
        echo "hasil deskripsi : " . $deskripsi;
    }
}
