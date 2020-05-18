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

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::view('/crud', 'crud')->name('crud.index')->middleware(['roles']);

Route::get('/admin/admin', 'AdminController@index')->name('admin.index');
Route::get('/veterinario/veterinario', 'VeterinarioController@index')->name('veterinario.index');
