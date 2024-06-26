<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/immigration', 'App\Http\Controllers\ImmigrationController@index')->name('immigration');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/heath', function () {
    return view('heath');
})->name('heath');

Route::get('/transport', function () {
    return view('transport');
})->name('transport');

Route::get('/sport', function () {
    return view('sport');
})->name('sport');

Route::get('/home/newspage', function () {
    return view('newspage');
})->name('/home/newspage');

Route::get('/category',[CategoryController::class, 'index']);

// Home example
Route::get('/home_example', 'App\Http\Controllers\HomeExampleController@index')->name('home_example');