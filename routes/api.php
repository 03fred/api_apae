<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['apiJwt']], function () {

    Route::group([
        'middleware' => 'api',
        'prefix' => 'student'
    ], function () {
        Route::post('', 'Api\\StudentController@insert');
        Route::get('', 'Api\\StudentController@findFilter');
    });

    Route::group([
        'middleware' => 'api',
        'prefix' => 'cid'
    ], function () {
        Route::post('', 'Api\\CidController@insert');
        Route::get('', 'Api\\CidController@findFilter');
        Route::get('/student', 'Api\\CidController@findAll');
    });

    Route::group([
        'middleware' => 'api',
        'prefix' => 'medicine'
    ], function () {
        Route::post('', 'Api\\MedicineController@insert');
        Route::get('', 'Api\\MedicineController@findFilter');
        Route::get('/student', 'Api\\MedicineController@findAll');
    });

    Route::group([
        'middleware' => 'api',
        'prefix' => 'user'
    ], function () {
        Route::post('', 'Api\\UserController@insert');
        Route::get('', 'Api\\UserController@findFilter');
    });

    Route::group([
        'middleware' => 'api',
        'prefix' => 'discipline'
    ], function () {
        Route::post('', 'Api\\DisciplineController@insert');
        Route::get('', 'Api\\DisciplineController@findFilter');
    });

    Route::group([
        'middleware' => 'api',
        'prefix' => 'evaluation'
    ], function () {
        Route::post('', 'Api\\EvaluationController@insert');
        Route::get('', 'Api\\EvaluationController@findFilter');
    });
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'Api\\AuthController@login');
});
