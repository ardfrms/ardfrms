<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\magangcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\ruangancontroller;

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
    return view('welcome');
});
Route::get('/magang', [magangcontroller::class,'index']);
Route::get('/sekolah',[magangcontroller::class, 'sekolah']);
Route::get('/ardo',[magangcontroller::class, 'ardo']);



Route::resource('posts', PostController::class);

route::resource('guru', gurucontroller::class);

route::resource('siswa', siswacontroller::class);

route::resource('kelas', kelascontroller::class);

route::resource('ruangan', ruangancontroller::class);
