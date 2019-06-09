<?php

Route::get('/', 'PagesController@index')->name('pages');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');