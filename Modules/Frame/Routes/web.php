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

Route::prefix('frame')->group(function() {
    Route::get('/', 'FrameController@index');
});

Route::domain('frame.' . env('APP_DOMAIN'))->group(function () {
    Route::group(['prefix' => 'basics'], function () {
        Route::get('index', 'BasicsController@index');//http://frame.lpt.kf/basics/index
    });

    Route::group(['prefix' => 'container'], function () {
        Route::get('index', 'ContainerController@index');//http://frame.lpt.kf/container/index
    });

    Route::group(['prefix' => 'test'], function () {
        Route::get('index', 'TestController@index');//http://frame.lpt.kf/test/index
    });

    Route::group(['prefix' => 'collection'], function () {
        Route::get('index/{name}', 'CollectionController@index');//http://frame.lpt.kf/collection/index/all
    });

});