<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/products', function ()
{
    return view('products');
});

// Removed 'verify' => true
Auth::routes(); 

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('login');