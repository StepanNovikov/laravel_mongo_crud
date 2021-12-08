<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'],function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('authors',\App\Http\Controllers\AuthorController::class);
    Route::resource('books',\App\Http\Controllers\BookController::class);

});
