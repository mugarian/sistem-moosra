<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\M_Alternatif;
use App\Models\M_Kriteria;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_admin' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        M_Alternatif::create([
            'nama_mahasiswa' => 'Tedi',
        ]);

        M_Kriteria::create([
            'nama_kriteria' => 'Nilai IPK',
            'bobot' => 25,
            'jenis_kriteria' => 'Benefit'
        ]);

        M_Kriteria::create([
            'nama_kriteria' => 'Etika',
            'bobot' => 20,
            'jenis_kriteria' => 'Benefit'
        ]);

        M_Kriteria::create([
            'nama_kriteria' => 'Prestasi Non Akademik',
            'bobot' => 20,
            'jenis_kriteria' => 'Benefit'
        ]);

        M_Kriteria::create([
            'nama_kriteria' => 'Jumlah Sertifikat Keahlian',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);

        M_Kriteria::create([
            'nama_kriteria' => 'Aktif Organisasi',
            'bobot' => 25,
            'jenis_kriteria' => 'Benefit'
        ]);
    }
}
