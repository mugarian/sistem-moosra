<?php

namespace App\Http\Controllers;

use App\Models\M_Kriteria;
use Illuminate\Http\Request;

class C_Kriteria extends Controller
{
    public function lihatKriteria() {
        return view('v_kriteria', [
            'title' => 'Kriteria',
            'kriteria' => M_Kriteria::all()
        ]);
    }

    public function ubahKriteria($id) {
        $kriteria = M_Kriteria::find($id);
        return view('v_ubahKriteria', [
            'title' => 'Ubah Kriteria',
            'kriteria' => $kriteria
        ]);
    }

    public function ubah(Request $request, $id) {
        $rules = [
            'nama_kriteria' => 'required|max:255',
            'bobot' => 'required|integer|max:255',
            'jenis_kriteria' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        M_kriteria::find($id)->update($validatedData);

        return redirect('/kriteria')->with('success', 'Ubah Data Kriteria Berhasil');
    }
}
