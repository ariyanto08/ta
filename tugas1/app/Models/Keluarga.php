<?php

namespace App\Models;

use App\Models\Anggota;
use App\Models\Kelahiran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'no_kk';

    public function Anggota()
    {
        return $this->hasMany(Anggota::class, 'no_kk');
    }
    public function Kelahiran()
    {
        return $this->hasMany(Kelahiran::class, 'no_kk');
    }

}
