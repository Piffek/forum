<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/cosiek', function(){
		dd(Auth::user());
	
	});
	
	Route::get('/login', 'LoginController@index');
	Route::get('/registration','LoginController@showRegisterForm');
	Route::post('/registration',['as'=>'register','uses'=>'LoginController@register']);
	Route::post('/post/login', ['as'=>'login','uses'=>'LoginController@authenticate']);
});
