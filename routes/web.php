<?php

Route::get('/', 'PagesController@index')->name('pages');

// Auth::routes();

Route::get('/lys-admin', 'AdminController@index')->name('admin');