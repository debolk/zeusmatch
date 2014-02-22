<?php

// Facebook authentication
Route::get('/login', 'FacebookController@redirectLogin');
Route::get('/login/callback', 'FacebookController@processLogin');
Route::get('/logout', 'FacebookController@processLogout');

// Main UI
Route::get('/', 'SplashController@index');
Route::get('/match', 'MatchController@index');
Route::post('/match/{other_id}', 'MatchController@like');

// Chat UI
Route::get('/chat', 'ChatController@index');

// Options UI
Route::get('/settings', 'SettingsController@index');
Route::post('/settings', 'SettingsController@save');
Route::post('/delete', 'SettingsController@delete');

Route::get('/privacy', 'PrivacyController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact/send', 'ContactController@send_contactform');
