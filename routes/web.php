<?php

use Illuminate\Support\Facades\Route;


 //frontend
Route::get('/', 'PagesController@index')->name('index');








//backend

Route::group(['prefix' => 'admin'], function(){


  Route::get('/login','AdminPagesController@login')->name('admin.auth.login');
  Route::get('/home','AdminPagesController@index')->name('admin.pages.index');

  Route::get('/product/create','AdminPagesController@product_create')->name('admin.pages.product_create');
  Route::post('/product/create','AdminPagesController@product_store')->name('admin.pages.product_store');

});
