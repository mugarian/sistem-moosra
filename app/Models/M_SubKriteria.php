<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_SubKriteria extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kriteria() {
        return $this->belongsTo(M_Kriteria::class);
    }

    public function penilaian() {
        return $this->hasMany(M_Penilaian::class);
    }
}
