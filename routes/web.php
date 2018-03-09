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

Auth::routes();
Route::get('/', function() {
    return redirect('/'.app()->getLocale().'/');
});

Route::prefix('{locale}')->group(function() {
    Route::get('/', 'MainController@getHome');
    Route::get('/home', 'MainController@getHome')->name('home');
    Route::get('/infos', 'MainController@getInfos')->name('infos');
    
    Route::get('/program', 'MainController@getProgram')->name('program');
    
    Route::get('/speakers', 'MainController@getSpeakers')->name('speakers');
    Route::get('/registration', 'MainController@getRegistration')->name('registration');
    Route::get('/accomodations', 'MainController@getAccomodations')->name('accomodations');
    
    
    Route::get('/contact', 'MainController@getContact')->name('contact');
    Route::post('/contact', 'MainController@postContact');
    
    Route::resource('sponsors', 'SponsorController');
    Route::resource('articles', 'ArticleController');
});

