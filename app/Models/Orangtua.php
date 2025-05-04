<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orangtua extends Model
{
    use HasFactory;

    protected $table = 'orangtua';
    protected $fillable = [
        'nik',
        'nama_ibu',
        'no_telp',
        'alamat',
    ];


    public function anak()
    {
        return $this->hasMany(Anak::class, 'id_orangtua');
    }
}

