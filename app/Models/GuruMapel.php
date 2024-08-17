<?php
//models GuruMapel
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    use HasFactory;

    protected $table = 'guru_mata_pelajaran';

    protected $fillable = [
        'guru_id',
        'mapel_id'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id'); // Asumsi 'guru_id' adalah nama foreign key di tabel pivot
    }

    // Definisikan relasi dengan model Mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id'); // Asumsi 'mapel_id' adalah nama foreign key di tabel pivot
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
}
