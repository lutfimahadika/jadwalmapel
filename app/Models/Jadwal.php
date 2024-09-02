<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengampu_id',
        'hari_id',
        'jam_id',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function pengampu()
    {
        return $this->belongsTo(GuruMapel::class, 'pengampu_id');
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class, 'hari_id');
    }

    public function jam()
    {
        return $this->belongsTo(Jam::class, 'jam_id');
    }
}
