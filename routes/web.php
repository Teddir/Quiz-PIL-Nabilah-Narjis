<?php

// use App\http\controllers\MhsController;
// use App\http\controllers\MtkController;
// use App\http\controllers\AbsController;
// use App\http\controllers\KtmController;
// use App\http\controllers\JdwController;
// use App\http\controllers\SmtController;
// use Illuminate\Support\Facades\Route;


// Route::resource('mahasiswas', MhsController::class);
// Route::resource('matakuliahs', MtkController::class);
// Route::resource('absensis', AbsController::class);
// Route::resource('kontrakmks', KtmController::class);
// Route::resource('jadwals', JdwController::class);
// Route::resource('semesters', SmtController::class);
// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can regddleware group. Now create something great!
// |ister web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" mi
// */
// //Route::put('/mahasiswas/{id}', [MhsController::class, 'update']);
// //Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);


// Route::post('', [MhsController::class, 'index']);
// Route::get('', [MhsController::class, 'index']);

// Route::get('/mahasiswas/{id}/edit', [MhsController::class, 'edit']);
// Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);
// Route::put('/mahasiswas/{id}', [MhsController::class, 'update']);


// Route::get('', [MtkController::class, 'index']);
// Route::post('', [MtkController::class, 'index']);
// Route::delete('/matakuliahs/{id}', [MtkController::class, 'destroy']);
// Route::put('/matakuliahs.update/{id}', [MtkController::class, 'update']);
// Route::put('/matakuliahs.store/{id}', [MtkController::class, 'store']);
// Route::get('/matakuliahs.edit/{id}', [MtkController::class, 'edit']);


// Route::get('/absensis/{id}', [AbsController::class, 'index']);
// Route::post('', [AbsController::class, 'index']);
// Route::get('/absensis/{id}', [AbsController::class, 'edit']);
// Route::delete('/absensis/{id}', [AbsController::class, 'destroy']);
// Route::put('/absensis/{id}', [AbsController::class, 'update']);


// Route::get('', [KtmController::class, 'index']);
// Route::post('', [KtmController::class, 'index']);
// Route::delete('/kontrakmks/{id}', [KtmController::class, 'destroy']);
// Route::put('/kontrakmks/{id}', [KtmController::class, 'update']);

// Route::get('', [JdwController::class, 'index']);
// Route::post('', [JdwController::class, 'index']);
// Route::delete('/jadwals/{id}', [JdwController::class, 'destroy']);
// Route::put('/jadwals/{id}', [JdwController::class, 'update']);

// Route::get('', [SmtController::class, 'index']);
// Route::post('', [SmtController::class, 'index']);
// Route::delete('/semesters/{id}', [SmtController::class, 'destroy']);
// Route::put('/semesters/{id}', [SmtController::class, 'update']);

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;

Route::get('/s', 'MhsController@index');
Route::get('/', [MhsController::class, 'index']);
