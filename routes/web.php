<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PemohonController;


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


route::resource('kebutuhans', KebutuhanController::class);
route::resource('kegiatans', KegiatanController::class);
route::resource('pemohons', PemohonController::class);
