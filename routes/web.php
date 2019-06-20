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

$domain_partner = config("settings.domain_partner");
Route::domain("{$domain_partner}.playgrounds.loc")->namespace('Partner')->name('partner.')->group(function(){
//    Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');
//    Route::post('/login', 'Auth\LoginController@login');


//    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/design-request', 'designRequestController@index')->name('design.request');
    Route::post('/design-request-store', 'designRequestController@store')->name('design.store');

//    Route::middleware('auth-partner')->group(function (){

//    });

});

$domain_designer = config("settings.partner_designer");
Route::domain("{$domain_designer}.playgrounds.loc")->namespace('Designer')->name('designer.')->group(function(){
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');
    Route::post('/login', 'Auth\LoginController@login');

    Route::get('/design-request', 'designRequestController@index')->name('design.request');
//    Route::middleware('auth-designer')->group(function (){
//
//    });

});

//$domain_admin = config("settings.partner_admin");
//Route::domain("{$domain_admin}.playgrounds.loc")->namespace('Admin')->name('admin.')->group(function(){
//    Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');
//    Route::post('/login', 'Auth\LoginController@login');
//
//    Route::middleware('auth-admin')->group(function (){
//
//    });
//
//});
//
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
