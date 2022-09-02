<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\LapakController;
use App\Http\Controllers\PembayaranController;

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
    return view('welcome');
});


Route::get('/surat/{id}', [PedagangController::class, 'surat']);
//route pedagang
Route::get('/pedagang', [PedagangController::class, 'index']);
Route::get('/pedagang/form', [PedagangController::class, 'create']);
Route::post('/pedagang/store', [PedagangController::class, 'store']);
Route::get('/pedagang/edit/{id}', [PedagangController::class, 'edit']);
Route::put('/pedagang/{id}', [PedagangController::class, 'update']);
Route::delete('/pedagang/{id}', [PedagangController::class, 'destroy']);


//route lapak
Route::get('/lapak', [LapakController::class, 'index']);
Route::get('/lapak/form', [LapakController::class, 'create']);
Route::post('/lapak/store', [LapakController::class, 'store']);
Route::get('/lapak/edit/{id}', [LapakController::class, 'edit']);
Route::put('/lapak/{id}', [LapakController::class, 'update']);
Route::delete('/lapak/{id}', [LapakController::class, 'destroy']);

//route pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/form', [PembayaranController::class, 'create']);
Route::post('/pembayaran/store', [PembayaranController::class, 'store']);
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
Route::put('/pembayaran/{id}', [PembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy']);

//Route autocomplete

//route laporan
Route::get('/laporan', [PembayaranController::class, 'laporan']);

//laporan pedagang
Route::get('/laporan_pedagang', [PedagangController::class, 'pedagang']);

//route bukti bayar
Route::get('/struk/{id}', [PembayaranController::class, 'print']);






Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


