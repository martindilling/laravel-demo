<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Home route
 */
Route::get('/', array('as' => 'home', 'uses' => 'PagesController@dashboard'))->before('auth');


/**
 * Auth routes
 */
Route::get( 'login',    array('as' => 'login',          'uses' => 'SessionsController@create'))->before('guest');
Route::get( 'logout',   array('as' => 'logout',         'uses' => 'SessionsController@destroy'))->before('auth');
Route::post('sessions', array('as' => 'sessions.store', 'uses' => 'SessionsController@store'))->before('guest');