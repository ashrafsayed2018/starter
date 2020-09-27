<?php


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return 'homw';
});


//  route to social media 

Route::get('redirect/{social}','socialController@redirect');
Route::get('callback/{social}','socialController@callback');