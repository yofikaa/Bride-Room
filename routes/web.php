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

Route::get('/', function () {
    return view('component/content');
})->name('landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pengajuan', [App\Http\Controllers\NikahController::class, 'pengajuan'])->name('pengajuan');

Route::namespace('App\Http\Controllers')->name('nikah.')->middleware(['web'])->prefix('nikah')->group(function () {
    Route::get('/tanggal', [App\Http\Controllers\NikahController::class, 'Date'])->name('date');
    Route::post('/tanggal', [App\Http\Controllers\NikahController::class, 'DateSumbit'])->name('dateSubmit');
    Route::get('/daftar', [App\Http\Controllers\NikahController::class, 'redirect'])->name('redirect');

    Route::get('/pilih', [App\Http\Controllers\NikahController::class, 'Pilih'])->name('pilih');

    Route::post('/pilih', [App\Http\Controllers\NikahController::class, 'verifikasisubmit'])->name('verifikasiSubmit');


    Route::name('cowo.')->prefix('cowo')->group(function () {
        Route::get('/sk', [App\Http\Controllers\NikahController::class, 'SKCowo'])->name('SKCowo');
        Route::post('/sk', [App\Http\Controllers\NikahController::class, 'SKCowoSubmit'])->name('SKCowoSubmit');
        Route::get('/biodatacowo', [App\Http\Controllers\NikahController::class, 'BiodataCowo'])->name('BiodataCowo');
        Route::post('/biodatacowo', [App\Http\Controllers\NikahController::class, 'BiodataCowoSubmit'])->name('BiodataCowoSubmit');
        Route::get('/dataortucowo', [App\Http\Controllers\NikahController::class, 'DataOrtuCowo'])->name('DataOrtuCowo');
        Route::post('/dataortucowo', [App\Http\Controllers\NikahController::class, 'DataOrtuCowoSubmit'])->name('DataOrtuCowoSubmit');
        Route::get('/kematiancowo', [App\Http\Controllers\NikahController::class, 'KematianCowo'])->name('KematianCowo');
        Route::post('/kematiancowo', [App\Http\Controllers\NikahController::class, 'KematianCowoSubmit'])->name('KematianCowoSubmit');
    });

    Route::name('cewe.')->prefix('cewe')->group(function () {
        Route::get('/sk', [App\Http\Controllers\NikahController::class, 'SKCewe'])->name('SKCewe');
        Route::post('/sk', [App\Http\Controllers\NikahController::class, 'SKCeweSubmit'])->name('SKCeweSubmit');
        Route::get('/biodatacewe', [App\Http\Controllers\NikahController::class, 'BiodataCewe'])->name('BiodataCewe');
        Route::post('/biodatacewe', [App\Http\Controllers\NikahController::class, 'BiodataCeweSubmit'])->name('BiodataCeweSubmit');
        Route::get('/dataortucewe', [App\Http\Controllers\NikahController::class, 'DataOrtuCewe'])->name('DataOrtuCewe');
        Route::post('/dataortucewe', [App\Http\Controllers\NikahController::class, 'DataOrtuCeweSubmit'])->name('DataOrtuCeweSubmit');
        Route::get('/kematiancewe', [App\Http\Controllers\NikahController::class, 'KematianCewe'])->name('KematianCewe');
        Route::post('/kematiancewe', [App\Http\Controllers\NikahController::class, 'KematianCeweSubmit'])->name('KematianCowoSubmit');
    });
});

