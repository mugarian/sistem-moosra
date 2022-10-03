<?php

namespace App\Http\Controllers;

use App\Models\M_Kriteria;
use App\Models\M_SubKriteria;
use Illuminate\Http\Request;
class C_SubKriteria extends Controller
{
    public function lihatSub() {
        return view('v_Sub', [
            'title' => 'Lihat Subkriteria',
            'subkriteria' => M_SubKriteria::all(),
            'kriteria' => M_Kriteria::all()
        ]);
    }

    public function tambahSub($id) {
        $kriteria = M_Kriteria::find($id);
        return view('v_tambahSub', [
            'title' => 'Tambah Sub',
            'kriteria' => $kriteria
        ]);
    }

    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            'kriteria_id' => 'required|alpha_num|max:255',
            'nama_sub' => 'required|max:255',
            'nilai' => 'required|alpha_num|max:255',
        ]);

        M_SubKriteria::create($validatedData);

        return redirect('/subkriteria')->with('success', 'Tambah Data Sub Berhasil');
    }

    public function ubahSub($id) {
        $sub = M_SubKriteria::find($id);
        return view('v_ubahSub', [
            'title' => 'Ubah Sub',
            'sub' => $sub,
        ]);
    }

    public function ubah(Request $request, $id) {
        $rules = [
            'nama_sub' => 'required|max:255',
            'nilai' => 'required|alpha_num|max:255',
        ];

        $validatedData = $request->validate($rules);

        M_SubKriteria::find($id)->update($validatedData);

        return redirect('/subkriteria')->with('success', 'Ubah Data Sub Berhasil');
    }

    public function hapus($id)
    {
        $Sub = M_SubKriteria::find($id);
        M_SubKriteria::destroy($Sub->id);
        return redirect('/subkriteria')->with('success', 'Data Sub telah dihapus');
    }
}
