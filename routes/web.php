<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::group(['middleware' =>'web'], function() {
    Route::get('/home', function(){
        return redirect('/');
    });
    // Route::get('/admin/editor', function(){
    //     return redirect
    // })
    Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
        
        Route::match(['get', 'post'], '/', ['uses'=>'AdminController@execute', 'as'=>'admin']); 
        Route::match(['get', 'post'], '/editor',['uses'=>'AdminController@editor', 'as'=>'editor']);
    });
    
    Route::get('/{locale?}',['uses'=>'IndexController@execute']);

  

   
});



