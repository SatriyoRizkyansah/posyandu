<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imunisasi extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
