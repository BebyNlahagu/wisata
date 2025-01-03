<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
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


Auth::routes();

Route::get('/',[DestinasiController::class,'home'])->name('wisata.index');
Route::get('/wisata/index',[DestinasiController::class,'cari'])->name('wisata.cari');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/wisata/rate',[DestinasiController::class,'keren'])->name('rate.keren');
Route::post('/wisata/rate', [DestinasiController::class, 'submit'])->name('submit.rating');


Route::middleware(['auth','role:0'])->group(function(){
    Route::get('/user/index',[HomeController::class,'index'])->name('user.index');

    Route::resource('/admin/destinasi',DestinasiController::class);
});
Route::middleware(['auth','role:1'])->group(function(){
    Route::get('/admin/index',[HomeController::class,'index'])->name('admin.index');

    Route::resource('/admin/destinasi',DestinasiController::class);
});

