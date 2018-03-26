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

Route::group(['middleware' => 'web'], function(){
    Route::match(['get','post'], '/',['uses'=>'IndexController@execute', 'as' => 'home']);
    Route::get('/page/{alias}',['uses'=>'PageController@execute', 'as' => 'page']);

    Route::auth();
});
Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function (){
    Route::get('/', function (){

    });

    Route::group(['prefix'=>'pages'], function (){
        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        Route::match(['get', 'post'],'/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
        Route::match(['get', 'post', 'delete'],'/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
    });

    Route::group(['prefix'=>'portfolios'], function (){
        Route::get('/', ['uses'=>'portfolioController@execute', 'as'=>'portfolio']);
        Route::match(['get', 'post'],'/add', ['uses'=>'portfolioAddController@execute', 'as'=>'portfolioAdd']);
        Route::match(['get', 'post', 'delete'],'/edit/{portfolio}', ['uses'=>'portfolioEditController@execute', 'as'=>'portfolioEdit']);
    });

    Route::group(['prefix'=>'services'], function (){
        Route::get('/', ['uses'=>'serviceController@execute', 'as'=>'services']);
        Route::match(['get', 'post'],'/add', ['uses'=>'serviceAddController@execute', 'as'=>'serviceAdd']);
        Route::match(['get', 'post', 'delete'],'/edit/{service}', ['uses'=>'serviceEditController@execute', 'as'=>'serviceEdit']);
    });
});