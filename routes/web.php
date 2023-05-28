<?php

use App\Http\Controllers\EscritorioController;
use App\Http\Controllers\LineaAmericanaController;
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

Route::get('/', EscritorioController::class)->name('escritorio.index');
Route::resource('lineas_americanas', LineaAmericanaController::class)->parameters([
    'lineas_americanas' => 'lineaAmericana',
]);
