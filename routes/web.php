<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Layout.main');
// });
// Route::get('/operator', function () {
//     return view('Pages.Operator.indexOperator');
// });
// Route::get('/guru', function () {
//     return view('Pages.Guru.indexGuru');
// });
// Route::get('/siswa', function () {
//     return view('Pages.Siswa.indexSiswa');
// });

Route::group(['prefix' => 'operator'], function () {
    Route::get('/', [\App\Http\Controllers\OperatorController::class, 'index'])->name('operator.index');
    Route::get('/create', [\App\Http\Controllers\OperatorController::class, 'create'])->name('operator.create');
    Route::post('/store', [\App\Http\Controllers\OperatorController::class, 'store'])->name('operator.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\OperatorController::class, 'edit'])->name('operator.edit');
    Route::post('/{id}/update', [\App\Http\Controllers\OperatorController::class, 'update'])->name('operator.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\OperatorController::class, 'destroy'])->name('operator.destroy');
});

Route::group(['prefix' => 'guru'], function () {
    Route::get('/', [\App\Http\Controllers\GuruController::class, 'index'])->name('guru.index');
    Route::get('/create', [\App\Http\Controllers\GuruController::class, 'create'])->name('guru.create');
    Route::post('/store', [\App\Http\Controllers\GuruController::class, 'store'])->name('guru.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\GuruController::class, 'edit'])->name('guru.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\GuruController::class, 'update'])->name('guru.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\GuruController::class, 'destroy'])->name('guru.destroy');
});

Route::group(['prefix' => 'kelas'], function () {
    Route::get('/', [\App\Http\Controllers\KelasController::class, 'index'])->name('kelas.index');
    Route::get('/create', [\App\Http\Controllers\KelasController::class, 'create'])->name('kelas.create');
    Route::post('/store', [\App\Http\Controllers\KelasController::class, 'store'])->name('kelas.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\KelasController::class, 'destroy'])->name('kelas.destroy');
});

Route::group(['prefix' => 'mata-pelajaran'], function () {
    Route::get('/', [\App\Http\Controllers\MataPelajaranController::class, 'index'])->name('mata_pelajaran.index');
    Route::get('/create', [\App\Http\Controllers\MataPelajaranController::class, 'create'])->name('mata_pelajaran.create');
    Route::post('/store', [\App\Http\Controllers\MataPelajaranController::class, 'store'])->name('mata_pelajaran.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\MataPelajaranController::class, 'edit'])->name('mata_pelajaran.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\MataPelajaranController::class, 'update'])->name('mata_pelajaran.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\MataPelajaranController::class, 'destroy'])->name('mata_pelajaran.destroy');
});

Route::group(['prefix' => 'nilai'], function () {
    Route::get('/', [\App\Http\Controllers\NilaiController::class, 'index'])->name('nilai.index');
    Route::get('/create', [\App\Http\Controllers\NilaiController::class, 'create'])->name('nilai.create');
    Route::post('/store', [\App\Http\Controllers\NilaiController::class, 'store'])->name('nilai.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\NilaiController::class, 'edit'])->name('nilai.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\NilaiController::class, 'update'])->name('nilai.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\NilaiController::class, 'destroy'])->name('nilai.destroy');
});

Route::group(['prefix' => 'arsip'], function () {
    Route::get('/', [\App\Http\Controllers\ArsipController::class, 'index'])->name('arsip.index');
    Route::get('/create', [\App\Http\Controllers\ArsipController::class, 'create'])->name('arsip.create');
    Route::post('/store', [\App\Http\Controllers\ArsipController::class, 'store'])->name('arsip.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\ArsipController::class, 'edit'])->name('arsip.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\ArsipController::class, 'update'])->name('arsip.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\ArsipController::class, 'destroy'])->name('arsip.destroy');
});

Route::group(['prefix' => 'siswa'], function () {
    Route::get('/', [\App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/create', [\App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/store', [\App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');
});
