<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas', 'tingkat', 'jurusan'
    ];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
}
