<?php

use Illuminate\Support\Facades\Route;


 //frontend routes

Route::get('/', 'Frontend\PagesController@index')->name('index');



Route::get('/products', 'Frontend\ProductsController@index')->name('products');
//Route::get('/products/{slug}', 'Frontend\ProductsController@show')->name('show');





//backend routes

Route::group(['prefix' => 'admin'], function(){


  Route::get('/login','Backend\AdminPagesController@login')->name('admin.auth.login');
  Route::get('/home','Backend\AdminPagesController@index')->name('admin.pages.index');

 Route::group(['prefix' => 'product'], function(){

  Route::get('/create','Backend\AdminProductController@create')->name('admin.pages.product_create');
  Route::post('/create','Backend\AdminProductController@store')->name('admin.pages.product_store');
  Route::get('/update/{id}','Backend\AdminProductController@update')->name('admin.pages.product_update');
  Route::post('edit{id}','Backend\AdminProductController@edit')->name('admin.pages.product_edit');
  Route::post('/delete{id}','Backend\AdminProductController@delete')->name('admin.pages.product_delete');
});

  Route::get('/x', 'AdminPagesController@x')->name('x');
});
