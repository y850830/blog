<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   
 	
   	return view('index');
});
Route::get('about', function () {
   
 	
   	return view('about');
});
Route::get('service', function () {
   
 	
   	return view('service');
});
Route::get('protfolio', function () {
   
 	
   	return view('protfolio');
});
Route::get('contact', function () {
   
 	
   	return view('contact');
});

Route::get('hello', function () {
   
 	
   	return view('hello.hello');
});

/*Route::pattern('id','[0-9]+');
Route::get('post/{id?}', function ($id = '0') {
   
 	
   	return 'id='.$id;
});

Route::get('hello/{name?}', function ($name = 'everybody') {
   
 	
   	return 'hello, '.$name;
});

Route::get('say', ['as' => 'name',function(){
   
 	
   	return 'hello';
}]);*/

Route::group(['prefix' => '/'], function(){

	Route::get('all', ['as' => 'all',function(){
   	
   	return 'all';
	}]);

	Route::get('hot', ['as' => 'hot',function(){
   	
   	return 'hot';
	}]);

	Route::get('featured', ['as' => 'featured',function(){
   	
   	return 'featured';
	}]);

	Route::get('random', ['as' => 'random',function(){
   	
   	return 'random';
	}]);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
