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

  		Route::get('/create','Backend\AdminProductController@create')->name('admin.pages.product.product_create');
  		Route::post('/create','Backend\AdminProductController@store')->name('admin.pages.product.product_store');
  		Route::get('/update/{id}','Backend\AdminProductController@update')->name('admin.pages.product.product_update');
  		Route::post('/edit{id}','Backend\AdminProductController@edit')->name('admin.pages.product.product_edit');
  		Route::post('/delete{id}','Backend\AdminProductController@delete')->name('admin.pages.product.product_delete');
  
		Route::get('/categories','Backend\CategoriesController@create')->name('admin.pages.category.create');
		Route::post('/categories','Backend\CategoriesController@store')->name('admin.pages.category.store');

		//Route::get('/categories/edit{id}','Backend\CategoriesController@edit')->name('admin.pages.category.edit');
		//Route::any('/categories/edit{id}','Backend\CategoriesController@edit')->name('admin.pages.category.edit');
		Route::match(['get','post'],'/categories/edit{id}','Backend\CategoriesController@edit')->name('admin.pages.category.edit');
  		Route::post('/categories/update{id}','Backend\CategoriesController@update')->name('admin.pages.category.update');
  		Route::post('/categories/delete{id}','Backend\CategoriesController@delete')->name('admin.pages.category.delete');
  




			Route::group(['prefix' => 'view'], function(){

   				Route::get('/','Backend\AdminProductController@view')->name('admin.pages.product.product_view');
  				Route::get('/update/{id}','Backend\AdminProductController@view_update')->name('admin.pages.product.product_view_update');
  				Route::post('/edit{id}','Backend\AdminProductController@view_edit')->name('admin.pages.product.product_view_edit');
  				Route::post('/delete{id}','Backend\AdminProductController@view_delete')->name('admin.pages.product.product_view_delete');


    		});


  
   });


  Route::get('/x', 'AdminPagesController@x')->name('x');

});
