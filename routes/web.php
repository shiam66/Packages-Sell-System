<?php

Route::get('/', 'WelcomeController@index');

//Route::get('/subscribe/new', 'SubscriptionController@subscribe');

Route::post('/subscribe/new', 'SubscriptionController@subscribeNew');

Route::post('/subscribe/add', 'SubscriptionController@subscribeAdd');

