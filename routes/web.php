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

Route::get('/options', [
		'uses'=>'HomeController@index',
		'as'=>'home.index2'
	]);
Route::get('/', [
		'uses'=>'HomeController@index2',
		'as'=>'home.index'
	]);
Route::get('/login', [
		'uses'=>'Auth\AuthController@login',
		'as'=>'auth.login'
	]);
// Route::post('/login', [
// 		'uses'=>'Auth\AuthController@postLogin',
// 		'as'=>'auth.login'
// 	]);
Route::get('/login', [
	    'uses' =>'Auth\AuthController@logout',
	    'as' => 'auth.logout'
	]);
Route::get('/test', [
	    'uses' =>'HomeController@test',
	    'as' => 'home.test'
	]);
Route::namespace('admin')->group(function(){
	Route::get('/admin-page', [
	    'uses' =>'IndexController@index',
	    'as' => 'admin.index'
	]);
	Route::get('/admin/quanlynguoidung', [
	    'uses' =>'UserController@index',
	    'as' => 'admin.user.index'
	]);
	Route::get('/admin/quanlynguoidung/them-nguoi-dung', [
	    'uses' =>'UserController@getadd',
	    'as' => 'admin.user.add'
	]);
	Route::post('/admin/quanlynguoidung/them-nguoi-dung', [
	    'uses' =>'UserController@postadd',
	    'as' => 'admin.user.add'
	]);
	Route::get('/admin/quanlynguoidung/sua-nguoi-dung/{id}', [
	    'uses' =>'UserController@getedit',
	    'as' => 'admin.user.edit'
	]);
	Route::post('/admin/quanlynguoidung/sua-nguoi-dung/{id}', [
	    'uses' =>'UserController@postedit',
	    'as' => 'admin.user.edit'
	]);
	Route::get('/admin/quanlynguoidung/xoa-nguoi-dung/{id}', [
	    'uses' =>'UserController@delete',
	    'as' => 'admin.user.delete'
	]);
	//Users
	
});
