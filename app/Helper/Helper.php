<?php
if (! function_exists('dataJadwal')) {
    function dataJadwal($kelas,$hari,$jam){
        $jadwal = \App\Models\Jadwal::with('pengampu','hari','jam')
        ->whereRelation('pengampu.kelas','kelas_id',$kelas)
        ->where('hari_id',$hari)
        ->whereJsonContains('jam_data',$jam)
        ->first();

        if($jadwal){
            return $jadwal->pengampu->guru->no_duk."-".$jadwal->pengampu->mapel->kode;
        }else{
            return null;
        }
    }
}
