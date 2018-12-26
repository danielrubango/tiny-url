<?php

Route::get('/', 'UrlShortenerController@index')->name('home');

Route::post('/', 'UrlShortenerController@save');

Route::get('/{name}', 'RedirectionsController@process');
