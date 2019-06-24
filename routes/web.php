<?php

//$ipOrDomain = '127.0.0.1';

$domain_partner = config("settings.domain_partner");

//Route::domain("{$domain_partner}.{$ipOrDomain}")->namespace('Partner')->name('partner.')->group(function () {
Route::prefix($domain_partner)->namespace('Partner')->name('partner.')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('showLoginForm');

    Route::middleware(['auth', 'auth.partner'])->group(function () {
        Route::get('/home', 'homeController@index')->name('home');

        Route::get('/design-request', 'designRequestController@index')->name('design.request');
        Route::post('/design-request-store', 'designRequestController@store')->name('design.store');
    });

});

$domain_designer = config("settings.domain_designer");
Route::prefix($domain_designer)->namespace('Designer')->name('designer.')->group(function () {
//Route::domain("{$domain_designer}.{$ipOrDomain}")->namespace('Designer')->name('designer.')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('showLoginForm');

    Route::middleware(['auth', 'auth.designer'])->group(function () {
        Route::get('/home', 'homeController@index')->name('home');
        Route::resource('/design-request', 'designRequestController')
            ->except(['show', 'delete'])->names('design.request');
    });

});

//$domain_admin = config("settings.partner_admin");
//Route::domain("{$domain_admin}.playgrounds.loc")->namespace('Admin')->name('admin.')->group(function(){
//    Route::get('/', 'Auth\LoginController@showLoginForm')->name('');
//    Route::post('/login', 'Auth\LoginController@login');
//
//    Route::middleware('auth-admin')->group(function (){
//
//    });
//
//});
//
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
