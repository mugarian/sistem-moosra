<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Echo_;

class M_Laporan extends Model
{
    use HasFactory;

    public static function normalisasi() {
        $penilaian = M_Penilaian::all();
        $kriteria = M_Kriteria::all();
        $bagi1 = 0;
        $bagi2 = 0;
        $bagi3 = 0;
        $bagi4 = 0;
        $bagi5 = 0;
        foreach ($penilaian as $pen) {
            $bagi1 += pow($pen->sub_kriteria1->nilai, 2);
            $bagi2 += pow($pen->sub_kriteria2->nilai, 2);
            $bagi3 += pow($pen->sub_kriteria3->nilai, 2);
            $bagi4 += pow($pen->sub_kriteria4->nilai, 2);
            $bagi5 += pow($pen->sub_kriteria5->nilai, 2);
        }

        $pembagi1 = sqrt($bagi1);
        $pembagi2 = sqrt($bagi2);
        $pembagi3 = sqrt($bagi3);
        $pembagi4 = sqrt($bagi4);
        $pembagi5 = sqrt($bagi5);

        $normalisasi = array();

        if ($pembagi1 == 0 || $pembagi2 == 0 || $pembagi3 == 0 || $pembagi4 == 0 || $pembagi5 == 0) {
            return [
                $pembagi1 = 1,
                $pembagi2 = 1,
                $pembagi3 = 1,
                $pembagi4 = 1,
                $pembagi5 = 1,
            ];
        } else {
            return [
                $pembagi1,
                $pembagi2,
                $pembagi3,
                $pembagi4,
                $pembagi5,
            ];
        }
    }

    public static function ranking() {

    }
}
