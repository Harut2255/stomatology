<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
//    Add
    Route::get('/add', ['as' => 'add', 'uses' => 'IndexController@add']);
    Route::post('/add', ['as' => 'add', 'uses' => 'IndexController@add']);
//    Edit
    Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'IndexController@edit']);
    Route::post('/edit/{id}', ['as' => 'edit', 'uses' => 'IndexController@edit']);
//    Delete
    Route::post('/delete/{id}', ['as' => 'delete', 'uses' => 'IndexController@delete']);
//    Customer
    Route::get('/customer/{id}', ['as' => 'customer', 'uses' => 'IndexController@customer']);

//    Visit Add
    Route::get('/addVisit/{id}', ['as' => 'addVisit', 'uses' => 'IndexController@addVisit']);
    Route::post('/addVisit/{id}', ['as' => 'addVisit', 'uses' => 'IndexController@addVisit']);
//    Visit Edit
    Route::get('/editVisit/{id}', ['as' => 'editVisit', 'uses' => 'IndexController@editVisit']);
    Route::post('/editVisit/{id}', ['as' => 'editVisit', 'uses' => 'IndexController@editVisit']);
    //    Visit Delete
    Route::post('/deleteVisit/{id}', ['as' => 'deleteVisit', 'uses' => 'IndexController@deleteVisit']);
//    Visit List
    Route::get('/visitList/{id}', ['as' => 'visitList', 'uses' => 'IndexController@visitList']);
//    Visit
    Route::get('/visit/{id}', ['as' => 'visit', 'uses' => 'IndexController@visit']);
//    Search
    Route::get('/search', ['as' => 'search', 'uses' => 'IndexController@search']);
//    Search Doctor
    Route::get('/searchDoctor', ['as' => 'searchDoctor', 'uses' => 'IndexController@searchDoctor']);
});


Route::auth();

