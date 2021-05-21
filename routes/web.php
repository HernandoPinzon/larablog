<?php

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

Route::get('/home', function () {
    return view('welcome');
});



Route::get('/about', function () {
    $nombre='Ing.Software';
    return view('about')->with('nombre',$nombre);
});

Route::get('/create', function () {
    
    return view('dashboard/post/create');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'HomeController@index')->name('nome');


Route::resource('/dashboard/post',
    PostController::class
);
Route::resource('/dashboard/category',
    CategoryController::class
);