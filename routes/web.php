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
    var_dump(csrf_token());
    return view('welcome');
});

Route::post('/student', 'StudentController@insert');
Route::get('/student', 'StudentController@findFilter');

Route::post('/cid', 'CidController@insert');
Route::get('/cid', 'CidController@findFilter');

Route::post('/medicine', 'MedicineController@insert');
Route::get('/medicine', 'MedicineController@findFilter');