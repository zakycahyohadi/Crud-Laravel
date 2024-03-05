<?php

use App\Http\Controllers\WargaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', [WargaController::class, 'index']);

Route::get('/input', [WargaController::class, 'create']);

Route::post('/store',[WargaController::class,'store']);

Route::get('/{id}/edit',[WargaController::class,'edit']);

Route::put('/update/{id}',[WargaController::class,'update']);

Route::delete('/update/{id}',[WargaController::class,'destroy']);

