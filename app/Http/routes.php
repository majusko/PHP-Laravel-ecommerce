<?php

Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');