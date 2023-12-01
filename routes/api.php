<?php

use App\Http\Controllers\PenerimaBansosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/penerima-bansos', [PenerimaBansosController::class, 'index'])->name('customer.product.index');
Route::get('/penerima-bansos/{id}', [PenerimaBansosController::class, 'show'])->name('customer.product.show');
Route::post('/penerima-bansos', [PenerimaBansosController::class, 'store'])->name('customer.product.store');
Route::put('/penerima-bansos/{id}', [PenerimaBansosController::class, 'update'])->name('customer.product.update');
Route::delete('/penerima-bansos/{id}', [PenerimaBansosController::class, 'destroy'])->name('customer.product.destroy');
