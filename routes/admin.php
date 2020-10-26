<?php

Route::get('/dashboard', function(){
    return redirect()->route('admin.login');
});

Route::group(['middleware' => 'guest'], function (){
   Route::get('login', 'LoginController@loginForm')->name('login');
   Route::post('login', 'LoginController@login')->name('login.action');
});

Route::group(['middleware' => 'auth'],function (){
    Route::get('/', 'DashboardController@index')->name('index');

    Route::post('logout', 'LoginController@logout')->name('logout');

    Route::resource('user', 'UserController');
    Route::resource('product', 'ProductController');
    Route::resource('gallery', 'GalleryController');

});
