<?php
use App\Http\Controllers\AccessoiresController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ReparatieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FietsenController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewsBriefController;
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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/accessoires', [AccessoiresController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/save', [ContactController::class, 'store'])->name('contact.store');

Route::post('/nieuwsbrief/save', [NewsBriefController::class, 'store'])->name('newsbrief.store');

Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/reparatie', [ReparatieController::class, 'index'])->name('reparatie');
Route::post('/reparatie/save', [ReparatieController::class, 'store'])->name('reparatie.store');

Route::get('/products', [FietsenController::class, 'index'])->name('fietsen');

Route::get('/rent', [RentController::class, 'index'])->name('rent.index');

// Authentication Routes...
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');