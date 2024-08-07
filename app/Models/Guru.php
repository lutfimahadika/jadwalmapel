<?php
//models guru
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    protected $fillable = [
        'no_duk',
        'nama_guru',
        'beban_mengajar',
    ];

    //relasi many to many dengan mata pelajaran
    public function mapels(){
        // return $this->belongsToMany(Mapel::class, 'guru_mata_pelajaran', 'guru_id', 'mapel_id');
        return $this->hasMany(GuruMapel::class, 'guru_id');
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }


}
