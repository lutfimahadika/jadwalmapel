<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_pelajaran',
        'jp',
    ];

    //relasi many to many dengan guru
    public function gurus(){
        return $this->belongsToMany(Guru::class, 'guru_mata_pelajaran', 'mapel_id', 'guru_id');
    }
}
