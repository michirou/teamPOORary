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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
=
Route::get('/create_transaction', 'PostController@index');
Route::get('/process', 'PostController@create');

Route::get('/user/get/{acc_num}', 'UsersController@getAccount');

Route::get('/make_transaction', 'PostController@index');


/*static palang*/
Route::get('/home2', function() {
    return view('home2');

});
/*for testing*/
Route::get('/create', function() {
	return view('posts.addPost');
});
