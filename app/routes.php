<?php

// Facebook authentication
Route::get('/login', 'FacebookController@redirectLogin');
Route::get('/login/callback', 'FacebookController@processLogin');

// Main UI
Route::get('/', 'SplashController@index');
Route::get('/match', 'MatchController@index');

// Options UI
Route::get('/settings', 'SettingsController@index');
Route::get('/privacy', 'PrivacyController@index');
Route::get('/contact', 'ContactController@index');

