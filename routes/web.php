<?php

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

Route::get('/proyek', 'ProjectController@index'); // menampilkan semua
Route::get('/proyek/create', 'ProjectController@create'); // menampilkan halaman form
Route::post('/proyek', 'ProjectController@store'); // menyimpan data
Route::get('/proyek/{id}', 'ProjectController@show'); // menampilkan detail item dengan id 
Route::get('/proyek/{id}/edit', 'ProjectController@edit'); // menampilkan form untuk edit item
Route::put('/proyek/{id}', 'ProjectController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'ProjectController@destroy'); // menghapus data dengan id

Route::get('/proyek/{id}/daftarkan-staff', 'EmployeeController@create');
Route::post('/proyek/{id}/daftarkan-staff', 'EmployeeController@store');
