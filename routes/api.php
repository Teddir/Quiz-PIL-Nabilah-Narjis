<?php

use App\Http\Controllers\Api\MhsController;
use App\Http\Controllers\Api\AbsController;
use App\Http\Controllers\Api\JdwController;
use App\Http\Controllers\Api\KtmController;
use App\Http\Controllers\Api\MtkController;
use App\Http\Controllers\Api\SmtController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//mahasiswa
//  Route::get('mahasiswas', 'MhsController@index');
Route::get('/mahasiswas', [MhsController::class, 'index']);
Route::post('/mahasiswas/create', [MhsController::class, 'store']);
Route::put('/mahasiswas/update/{id}', [MhsController::class, 'update']);
Route::delete('/mahasiswas/delete/{id}', [MhsController::class, 'destroy']);

//absensi
Route::get('/absensis', [AbsController::class, 'index']);
Route::post('/absensis/create', [AbsController::class, 'store']);
Route::put('/absensis/update/{id}', [AbsController::class, 'update']);
Route::delete('/absensis/delete/{id}', [AbsController::class, 'destroy']);

//jadwalMatkul
Route::get('/jadwals', [JdwController::class, 'index']);
Route::post('/jadwals/create', [JdwController::class, 'store']);
Route::put('/jadwals/update/{id}', [JdwController::class, 'update']);
Route::delete('/jadwals/delete/{id}', [JdwController::class, 'destroy']);

//kontrak
Route::get('/kontraks', [KtmController::class, 'index']);
Route::post('/kontraks/create', [KtmController::class, 'store']);
Route::put('/kontraks/update/{id}', [KtmController::class, 'update']);
Route::delete('/kontraks/delete/{id}', [KtmController::class, 'destroy']);

//matakuliah
Route::get('/matakuliahs', [MtkController::class, 'index']);
Route::post('/matakuliahs/create', [MtkController::class, 'store']);
Route::put('/matakuliahs/update/{id}', [MtkController::class, 'update']);
Route::delete('/matakuliahs/delete/{id}', [MtkController::class, 'destroy']);

//semester
Route::get('/semesters', [SmtController::class, 'index']);
Route::post('/semesters/create', [SmtController::class, 'store']);
Route::put('/semesters/update/{id}', [SmtController::class, 'update']);
Route::delete('/semesters/delete/{id}', [SmtController::class, 'destroy']);
