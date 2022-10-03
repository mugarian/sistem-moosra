<?php

namespace App\Http\Controllers;

use App\Models\M_Alternatif;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_Alternatif extends Controller
{
    public function lihatAlternatif() {
        return view('v_alternatif', [
            'title' => 'Lihat Alternatif',
            'alternatif' => M_Alternatif::all()
        ]);
    }

    public function tambahAlternatif() {
        return view('v_tambahAlternatif', [
            'title' => 'Tambah Alternatif',
        ]);
    }

    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mahasiswa' => 'required|max:255',
        ]);

        M_Alternatif::create($validatedData);

        return redirect('/alternatif')->with('success', 'Tambah Data Alternatif Berhasil');
    }

    public function ubahAlternatif($id) {
        $alternatif = M_Alternatif::find($id);
        return view('v_ubahAlternatif', [
            'title' => 'Ubah Alternatif',
            'alternatif' => $alternatif
        ]);
    }

    public function ubah(Request $request, $id) {
        $rules = [
            'nama_mahasiswa' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        M_Alternatif::find($id)->update($validatedData);

        return redirect('/alternatif')->with('success', 'Ubah Data Alternatif Berhasil');
    }

    public function hapus($id)
    {
        $alternatif = M_Alternatif::find($id);
        M_Alternatif::destroy($alternatif->id);
        return redirect('/alternatif')->with('success', 'Data Alternatif telah dihapus');
    }
}
