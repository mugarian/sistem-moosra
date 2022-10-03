<?php

namespace App\Http\Controllers;

use App\Models\M_Kriteria;
use App\Models\M_Penilaian;
use App\Models\M_Alternatif;
use Illuminate\Http\Request;
use App\Models\M_SubKriteria;
use Illuminate\Support\Facades\DB;

class C_Penilaian extends Controller
{
    public function lihatPenilaian() {
        return view('v_Penilaian', [
            'title' => 'Penilaian',
            'penilaian' => M_Penilaian::all(),
            'alternatif' => M_Alternatif::all(),
            'kriteria' => M_Kriteria::all(),
            'subkriteria' => M_SubKriteria::all()
        ]);
    }

    public function tambahPenilaian($id) {
        $alternatif = M_Alternatif::find($id);
        $kriteria = M_Kriteria::all();
        $subkriteria = M_SubKriteria::all();
        return view('v_tambahPenilaian', [
            'title' => 'Tambah Penilaian',
            'alternatif' => $alternatif,
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria
        ]);
    }

    public function tambah(Request $request)
    {
        $kriteria = M_Kriteria::all();

        foreach ($kriteria as $kr) {
            $sub = $request[$kr->id];
            DB::table('m__penilaians')->insert([
                'alternatif_id' => $request->alternatif_id,
                'sub_kriteria_id' => $sub
            ]);
        }
        return redirect('/penilaian')->with('success', 'Tambah Data Penilaian Berhasil');
    }

    public function ubahPenilaian($id) {
        $penilaian = M_Penilaian::where('alternatif_id', $id)->first();
        $kriteria = M_Kriteria::all();
        $subkriteria = M_SubKriteria::all();
        return view('v_ubahPenilaian', [
            'title' => 'Ubah Penilaian',
            'penilaian' => $penilaian,
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria
        ]);
    }

    public function ubah(Request $request, $id) {

        $kriteria = M_Kriteria::all();

        foreach ($kriteria as $kr) {
            $sub = $request[$kr->id];
            DB::table('m__penilaians')
                ->where('id', $id)
                ->update([
                'alternatif_id' => $request->alternatif_id,
                'sub_kriteria_id' => $sub
            ]);
        }

        return redirect('/penilaian')->with('success', 'Ubah Data Penilaian Berhasil');
    }

    public function hapus($id)
    {
        $penilaian = M_Penilaian::find($id);
        M_Penilaian::destroy($penilaian->id);
        return redirect('/penilaian')->with('success', 'Data Penilaian telah dihapus');
    }
}
