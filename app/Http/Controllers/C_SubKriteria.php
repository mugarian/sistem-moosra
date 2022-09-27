<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_SubKriteria extends Controller
{
    public function lihatSub() {
        return view('v_lihatSub', [
            'title' => 'Lihat Sub Kriteria'
        ]);
    }

    public function tambahSub() {
        return view('v_tambahSub', [
            'title' => 'Tambah Sub Kriteria'
        ]);
    }


}
