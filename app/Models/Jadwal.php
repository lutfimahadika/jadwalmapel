<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class);
    }

    public function jam()
    {
        return $this->belongsTo(Jam::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
