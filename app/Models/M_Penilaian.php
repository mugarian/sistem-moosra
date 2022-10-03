<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Penilaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alternatif() {
        return $this->belongsTo(M_Alternatif::class);
    }

    public function sub_kriteria() {
        return $this->belongsTo(M_SubKriteria::class);
    }
}
