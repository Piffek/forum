<?php


Route::group(['middleware' => ['web']], function () {
Route::get('/login', 'LoginController@index');
Route::get('/registration','LoginController@showRegisterForm')->name('registration');
Route::post('/registration', 'LoginController@register')->name('register');
Route::post('/post/login', 'LoginController@authenticate')->name('login');

Route::get('/', 'HomeController@index')->name('homePage');

Route::get('/subjectForm', 'SubjectController@index')->name('subjectSubject');
Route::post('/addSubject', 'SubjectController@add')->name('addSubject');
});
