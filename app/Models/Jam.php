<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    use HasFactory;

    protected $fillable = ['jam_awal', 'jam_akhir'];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
}
