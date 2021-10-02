<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Tasks','taskController');

Route::get('task/Login','studentController@login');
Route::post('task/doLogin','studentController@doLogin');
Route::get('task/Logout','studentController@logOut');

Route::resource('Users','studentController');

Route::get('Student/Login','studentController@login');
Route::post('Student/doLogin','studentController@doLogin');
Route::get('Student/Logout','studentController@logOut');



/*
 /Users  (get)           Route::get('Users','studentResourceController@index')
 /Users/create (get)     Route::get('Users/create','studentResourceController@create')
 /Users  (post)          Route::post('Users','studentResourceController@store')
 /Users/{id}/edit (get)  Route::get('Users/{id}/edit','studentResourceController@edit')
 /Users/{id}  (put)      Route::put('Users/{id}','studentResourceController@update')
 /Users/{id}  (get)      Route::get('Users/{id}','studentResourceController@show')
 /Users/{id}  (delete)   Route::delete('Users/{id}','studentResourceController@destroy')
 */