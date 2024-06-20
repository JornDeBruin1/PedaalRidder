<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ReperatieController;
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
    return view('index');
});
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/reparatie', [\App\Http\Controllers\ReperatieController::class, 'index'])->name('reperatie'); 
Route::post('/reparatie/save', [\App\Http\Controllers\ReperatieController::class, 'store'])->name('reperatie.store'); 

Route::get('/products', function ()
{
    return view('products');
});