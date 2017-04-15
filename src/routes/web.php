<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/cosiek', function(){
		dd(Auth::user())->middleware('auth:api');
	
	});
	
	Route::get('/login', 'LoginController@index');
	Route::post('/post/login', 'LoginController@authenticate');
});
