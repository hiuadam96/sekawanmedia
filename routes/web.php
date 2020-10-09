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
});
Route::get('/calc', function () {
    return view('calc');
});




Route::get('book', 'BookController@index');
Route::get('/addbook', 'BookController@add');
Route::get('/book/{nama}', 'BookController@index');
//Route::get('/addbook', 'BookController@form');
Route::post('/addbook/proses', 'BookController@store');
Route::get('/book/delete/{id}','BookController@delete');
Route::get('/book/vieew/edit/{id}','BookController@edit');
Route::get('/book/vieew/{id}','BookController@vieew');
Route::get('/calc','ProgramController@index');

Route::get('/tugas','tugasController@index');
Route::post('/tugastambah','tugasController@store');

