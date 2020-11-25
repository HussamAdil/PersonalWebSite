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


/* Start  Send Email */ 

Route::get('/contact', 'EmailController@index');

Route::post('/sendemail/send', 'EmailController@send');

/* end  Send Email */ 
