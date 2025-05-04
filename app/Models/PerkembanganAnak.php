<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PerkembanganAnak extends Model
{
    use HasFactory;

    protected $table = 'perkembangan_anak';
    protected $fillable = [
        'id_anak',
        'tanggal_posyandu',
        'berat_badan',
        'ket_bb',
        'tinggi_badan',
        'ket_tb',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
