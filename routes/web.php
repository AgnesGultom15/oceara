<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgnesController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destinasi', function () {
    return view('destinasi');
});


Route::get('/agnes', [AgnesController::class, 'tampilkan']);


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id){
   return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
   Route::get('/dashboard', function () {
      return 'Admin Dashboard';

   });

   Route::get('/users', function () {
      return 'Admin Users';
   });
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

//Route::get('/listbarang/{id}/{nama}', function($id, $nama){
   //return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);