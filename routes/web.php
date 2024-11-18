<?php

use App\Http\Controllers\DestinasiController;
use App\Models\destinasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('wisata.index');
});

Auth::routes();

Route::get('/wisata/index',[DestinasiController::class,'cari'])->name('wisata.cari');

Route::resource('/wisata',DestinasiController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
