<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use Illuminate\Support\Facades\Route;
use App\Models\obat;
use App\Models\resep;

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
    return view('home');
});
Route::get('/obat', function () {
    return view('obat');
});
Route::get('/resep', function () {
    return view('resep');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::resource('obat', ObatController::class);
Route::resource('resep', ResepController::class);