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
})->name('home'); 

Route :: get ('alumnos/index','AlumnosController@index')->name('alumnos.inicio');
Route :: get ('alumnos/store','AlumnosController@store')->name('alumnos.store');
Route :: get ('alumnos/edit/{id}','AlumnosController@edit')->name('alumnos.edit');
Route :: get ('alumnos/update/{id}','AlumnosController@update')->name('alumnos.update');
Route :: get ('alumnos/eliminar/{id}','AlumnosController@destroy')->name('alumnos.eliminar');
