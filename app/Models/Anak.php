<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'anak';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'nama',
        'id_orangtua',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
    ];


    public function orangtua()
    {
        return $this->belongsTo(Orangtua::class, 'id_orangtua');
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'id_anak');
    }

    public function perkembangan()
    {
        return $this->hasMany(PerkembanganAnak::class, 'id_anak');
    }
    
}
