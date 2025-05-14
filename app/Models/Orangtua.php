<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Orangtua extends Authenticatable
{
    protected $table = 'orangtua';

    protected $fillable = ['nik', 'no_telp', 'nama_ibu', 'alamat', 'created_at', 'updated_at'];

    public function getAuthPassword()
    {
        return $this->no_telp;
    }

    public function anak()
    {
        return $this->hasMany(Anak::class, 'id_orangtua');
    }
}

