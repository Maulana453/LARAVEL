<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SembilanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\delapanController;
use App\Http\Controllers\FrontendController;


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

Route::get('/salam', function () {
    return view('salam', [
        "nama"=>"Muhammad Farhan",
        "umur"=>18
    ]);
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/pemeriksaanform', [delapanController::class, 'index']);
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);

Route::get('/week9', [SembilanController::class, 'index']);
Route::post('/week9hasil', [SembilanController::class, 'week9hasil']);

// route admin
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});



