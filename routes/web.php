<?php

use App\Http\Controllers\PertanyaanController;
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
// home
Route::get('/', 'PertanyaanController@index');

// Pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create'); // form new questions
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan pertanyaan baru
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); // edit pertanyaan
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); // menghapus pertanyaan
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // menghapus pertanyaan

// Jawaban
Route::get('/jawaban/{id}', 'JawabanController@index'); // menampilkan  jawaban dari pertanyaan dengan id tertentu
Route::get('/jawaban/{id}/create', 'JawabanController@create'); // membuat jawaban dengan id tertentu
Route::post('/jawaban/{id}', 'JawabanController@store'); // menyimpan jawaban baru untuk pertanyaan dengan id tertentu