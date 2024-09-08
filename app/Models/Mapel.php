<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_pelajaran',
        'kode',
        'jp',
        'tingkat',
        'jurusan'
    ];

    //relasi many to many dengan guru
    public function gurus(){
        // return $this->belongsToMany(Guru::class, 'guru_mata_pelajaran', 'mapel_id', 'guru_id');
        return $this->hasMany(GuruMapel::class, 'mapel_id');
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
}
