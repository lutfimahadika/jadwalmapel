<?php
if (! function_exists('dataJadwal')) {
    function dataJadwal($kelas,$hari,$jam){
        $jadwal = \App\Models\Jadwal::with('pengampu','hari','jam')
        ->whereRelation('pengampu.kelas','kelas_id',$kelas)
        ->where('hari_id',$hari)
        ->where('jam_id',$jam)
        ->first();
        return $jadwal?->pengampu->guru->no_duk."-".$jadwal?->pengampu->mapel->id;
    }
}
