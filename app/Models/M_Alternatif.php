<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Alternatif extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penilaian() {
        return $this->hasMany(M_Penilaian::class);
    }
}
