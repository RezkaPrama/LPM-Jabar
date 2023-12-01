<?php

use App\Http\Controllers\Admin\PenerimaBansosController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

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

// Route::get('{any}', function () {
//     return view('app');
// })->where('any', '.*');

Route::resource('/', PenerimaBansosController::class);
// Route::get('/list-penerima',  [PenerimaBansosController::class, 'index'])->name('index');
Route::get('/add-penerima-bansos', [PenerimaBansosController::class, 'create'])->name('bansos.create');
Route::get('/preview-penerima-bansos/{id}', [PenerimaBansosController::class, 'show'])->name('bansos.preview');
Route::post('/penerima-bansos-store', [PenerimaBansosController::class, 'store'])->name('bansos.store');

Route::get('/get-provinces',  [LocationController::class, 'getProvinces'])->name('getProvinces');
Route::get('/get-cities/{province_id}', [LocationController::class, 'getCities'])->name('getCities');
Route::get('/get-districts/{city_id}', [LocationController::class, 'getDistricts'])->name('getDistricts');
Route::get('/get-villages/{district_id}', [LocationController::class, 'getVillages'])->name('getVillages');

