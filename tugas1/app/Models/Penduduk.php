<?php

namespace App\Models;

use App\Models\Anggota;
use App\Models\Kematian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';

    function Kematian(){
        return $this->belongsTo(Kematian::class,'nik');
    }
    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'nik');
    }
}
