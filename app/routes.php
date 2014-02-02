<?php

// Facebook authentication
Route::get('/login', 'FacebookController@redirectLogin');
Route::get('/login/callback', 'FacebookController@processLogin');
Route::get('/logout', 'FacebookController@processLogout');

// Main UI
Route::get('/', 'SplashController@index');
Route::get('/match', 'MatchController@index');
Route::get('/chat', 'ChatController@index');

// Options UI
Route::get('/settings', 'SettingsController@index');
Route::get('/privacy', 'PrivacyController@index');
Route::get('/contact', 'ContactController@index');

