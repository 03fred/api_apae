<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => ['apiJwt']], function () {
    Route::post('/student', 'Api\\StudentController@insert');
    Route::put('/student', 'Api\\StudentController@update');
    Route::get('/student', 'Api\\StudentController@findFilter');
    Route::delete('/student/{id}', 'Api\\StudentController@destroy');

    Route::post('/cid', 'Api\\CidController@insert');
    Route::get('/cid', 'Api\\CidController@findFilter');
    Route::get('/cid-student', 'Api\\CidController@findAll');

    Route::post('/medicine', 'Api\\MedicineController@insert');
    Route::get('/medicine', 'Api\\MedicineController@findFilter');

    Route::get('/user', 'Api\\UserController@findFilter');
    
    Route::post('/discipline', 'Api\\DisciplineController@insert');
    
    Route::post('/class', 'Api\\ClassController@insert');

    Route::post('/teacher-discipline', 'Api\\TeacherDisciplineController@insert');

    Route::post('/student-class', 'Api\\StudentClassController@insert');
    
    Route::post('/evaluation', 'Api\\EvaluationController@insert');

    Route::post('/frequency', 'Api\\FrequencyController@insert');
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'Api\\AuthController@login');
});
