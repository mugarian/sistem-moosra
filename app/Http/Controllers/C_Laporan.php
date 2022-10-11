<?php

namespace App\Http\Controllers;

use App\Models\M_Kriteria;
use App\Models\M_Alternatif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\M_Laporan;
use App\Models\M_Penilaian;

class C_Laporan extends Controller
{
    public function lihatLaporan() {
        $kriteria = M_Kriteria::all();
        $alternatif = M_Alternatif::all();
        $penilaian = M_Penilaian::all();

        $normalisasi = M_Laporan::normalisasi();
        return view('v_laporan', [
            'title' => 'Laporan',
            'laporan' => 'Laporan',
            'kriteria' => $kriteria,
            'alternatif' => $alternatif,
            'penilaian' => $penilaian,
            'normalisasi' => $normalisasi
        ]);
    }

    public function tes() {
        $normal = 'ini';
        $a = 'nor';
        $ab = 'a';
        return dd($$ab);
    }
}
