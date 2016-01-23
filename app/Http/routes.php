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
   
 	
   	return view('welcome');
});

Route::pattern('id','[0-9]+');
Route::get('post/{id?}', function ($id = '0') {
   
 	
   	return 'id='.$id;
});

Route::get('hello/{name?}', function ($name = 'everybody') {
   
 	
   	return 'hello, '.$name;
});

Route::get('say', ['as' => 'hello',function(){
   
 	
   	return 'hello';
}]);

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
