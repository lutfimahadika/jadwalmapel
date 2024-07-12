<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\DataTableController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
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
});

