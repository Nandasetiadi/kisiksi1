<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincon;
use App\Http\Controllers\dashboardcon;
use App\Http\Controllers\registercon;
use App\Http\Controllers\usercon;
use App\Http\Controllers\produkcon;
use App\Http\Controllers\pembeliancon;
use App\Http\Controllers\populercon;

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
Route::get('/friday', [populercon::class, 'home'])->name('homepopuler');
Route::get('/', [produkcon::class, 'home'])->name('homeproduk');

Route::get('/login', [logincon::class, 'login'])->name('login');
Route::post('actionlogin', [logincon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [dashboardcon::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [logincon::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [registercon::class, 'register'])->name('register');
Route::post('register/action', [registercon::class, 'actionregister'])->name('actionregister');

Route::get('/user/tampil', [usercon::class, 'index'])->name('indexUser')->middleware('auth');
Route::get('/user/input', [usercon::class, 'input'])->name('inputUser')->middleware('auth');
Route::post('/user/storeinput', [usercon::class, 'storeinput'])->name('storeInputUser')->middleware('auth');
Route::get('/user/update/{id}', [usercon::class, 'update'])->name('updateUser')->middleware('auth');
Route::post('/user/storeupdate', [usercon::class, 'storeupdate'])->name('storeUpdateUser')->middleware('auth');
Route::get('/user/delete/{id}', [usercon::class, 'delete'])->name('deleteUser')->middleware('auth');

Route::get('/produk/tampil', [produkcon::class, 'index'])->name('indexproduk')->middleware('auth');
Route::get('/produk/input', [produkcon::class, 'input'])->name('inputproduk')->middleware('auth');
Route::post('/produk/storeinput', [produkcon::class, 'storeinput'])->name('storeInputproduk')->middleware('auth');
Route::get('/produk/update/{id}', [produkcon::class, 'update'])->name('updateproduk')->middleware('auth');
Route::post('/produk/storeupdate', [produkcon::class, 'storeupdate'])->name('storeUpdateproduk')->middleware('auth');
Route::get('/produk/delete/{id}', [produkcon::class, 'delete'])->name('deleteproduk')->middleware('auth');
Route::get('/produk/upload', [produkcon::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/produk/uploadproses', [produkcon::class, 'uploadproses'])->name('uploadproses')->middleware('auth');

Route::get('/pembelian/tampil', [pembeliancon::class, 'index'])->name('indexpembelian')->middleware('auth');
Route::get('/pembelian/input', [pembeliancon::class, 'input'])->name('inputpembelian')->middleware('auth');
Route::post('/pembelian/storeinput', [pembeliancon::class, 'storeinput'])->name('storeInputpembelian')->middleware('auth');
Route::get('/pembelian/update/{id}', [pembeliancon::class, 'update'])->name('updatepembelian')->middleware('auth');
Route::post('/pembelian/storeupdate', [pembeliancon::class, 'storeupdate'])->name('storeUpdatepembelian')->middleware('auth');
Route::get('/pembelian/delete/{id}', [pembeliancon::class, 'delete'])->name('deletepembelian')->middleware('auth');

Route::get('/populer/tampil', [populercon::class, 'index'])->name('indexpopuler')->middleware('auth');
Route::get('/populer/input', [populercon::class, 'input'])->name('inputpopuler')->middleware('auth');
Route::post('/populer/storeinput', [populercon::class, 'storeinput'])->name('storeInputpopuler')->middleware('auth');
Route::get('/populer/update/{id}', [populercon::class, 'update'])->name('updatepopuler')->middleware('auth');
Route::post('/populer/storeupdate', [populercon::class, 'storeupdate'])->name('storeUpdatepopuler')->middleware('auth');
Route::get('/populer/delete/{id}', [populercon::class, 'delete'])->name('deletepopuler')->middleware('auth');
Route::get('/populer/upload', [populercon::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/populer/uploadproses', [populercon::class, 'uploadproses'])->name('uploadproses')->middleware('auth');
