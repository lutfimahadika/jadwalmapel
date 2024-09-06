<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\GenetikaController;
use App\Http\Controllers\GurumapelController;
use App\Http\Controllers\HariController;
use App\Models\Genetika;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'] , function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

    //user
    Route::get('/user', [HomeController::class, 'index'])->name('index');
    Route::get('/create', [HomeController::class, 'create'])->name('user.create');
    Route::post('/store', [HomeController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

    //show vias client/serverside
    Route::get('/clientside', [DataTableController::class, 'clientside'])->name('clientside');
    Route::get('/serverside', [DataTableController::class, 'serverside'])->name('serverside');

    //mapel
    Route::get('/mapel', [MapelController::class, 'index_mapel'])->name('index_mapel');
    Route::get('/create-mapel', [MapelController::class, 'create'])->name('mapel.create');
    Route::post('/store-mapel', [MapelController::class, 'store'])->name('mapel.store');
    Route::get('/edit-mapel/{id}', [MapelController::class, 'edit'])->name('mapel.edit');
    Route::put('/update-mapel/{id}', [MapelController::class, 'update'])->name('mapel.update');
    Route::delete('/delete-mapel/{id}', [MapelController::class, 'delete'])->name('mapel.delete');

    //guru
    Route::get('/guru', [GuruController::class, 'index_guru'])->name('index_guru');
    Route::get('/create-guru', [GuruController::class, 'create'])->name('guru.create');
    Route::post('/store-guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('/edit-guru/{id}', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('/update-guru/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('/delete-guru/{id}', [GuruController::class, 'delete'])->name('guru.delete');

    //guru mengajar
    Route::get('/gurumengajar', [GurumapelController::class, 'index_gurumengajar'])->name('index_gurumengajar');
    Route::get('/create-gurumengajar', [GurumapelController::class, 'create'])->name('gurumengajar.create');
    Route::post('/store-gurumengajar', [GurumapelController::class, 'store'])->name('gurumengajar.store');
    Route::get('/edit-gurumengajar/{id}', [GurumapelController::class, 'edit'])->name('gurumengajar.edit');
    Route::put('/update-gurumengajar/{id}', [GurumapelController::class, 'update'])->name('gurumengajar.update');
    Route::delete('/delete-gurumengajar/{id}', [GurumapelController::class, 'delete'])->name('gurumengajar.delete');

    //kelas
    Route::get('/kelas', [KelasController::class, 'index_kelas'])->name('index_kelas');
    Route::get('/create-kelas', [KelasController::class, 'create'])->name('kelas.create');
    Route::post('/store-kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::get('/edit-kelas/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('/update-kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/delete-kelas/{id}', [KelasController::class, 'delete'])->name('kelas.delete');

    //kelas
    Route::get('/hari', [HariController::class, 'index_hari'])->name('index_hari');
    Route::get('/create-hari', [HariController::class, 'create'])->name('hari.create');
    Route::post('/store-hari', [HariController::class, 'store'])->name('hari.store');
    Route::get('/edit-hari/{id}', [HariController::class, 'edit'])->name('hari.edit');
    Route::put('/update-hari/{id}', [HariController::class, 'update'])->name('hari.update');
    Route::delete('/delete-hari/{id}', [HariController::class, 'delete'])->name('hari.delete');

    //jam
    Route::get('/jam', [JamController::class, 'index_jam'])->name('index_jam');
    Route::get('/create-jam', [JamController::class, 'create'])->name('jam.create');
    Route::post('/store-jam', [JamController::class, 'store'])->name('jam.store');
    Route::get('/edit-jam/{id}', [JamController::class, 'edit'])->name('jam.edit');
    Route::put('/update-jam/{id}', [JamController::class, 'update'])->name('jam.update');
    Route::delete('/delete-jam/{id}', [JamController::class, 'delete'])->name('jam.delete');

    // routes/web.php
    Route::get('/genetika', [GenetikaController::class, 'index'])->name('genetika.index');

    Route::get('/jadwal/generate',[GenetikaController::class,'generate'])->name('jadwal.generate');

    //export Jadwal
    Route::get('/jadwal/export',[JadwalController::class,'export'])->name('jadwal.export');
});

