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
Route::get('/profile', [
		'uses'=>'HomeController@profile',
		'as'=>'user.profile'
	]);
Route::get('/login', [
		'uses'=>'Auth\AuthController@login',
		'as'=>'auth.login'
	]);
Route::post('/login', [
		'uses'=>'Auth\AuthController@postLogin',
		'as'=>'auth.login'
	]);
Route::get('/logout', [
	    'uses' =>'Auth\AuthController@logout',
	    'as' => 'auth.logout'
	]);
Route::get('/ajax/postbonsai', [
		'uses'=>'AjaxController@updateInfo',
		'as'=>'ajax.updateplant'
	]);
Route::namespace('admin')->group(function(){
	Route::get('/admin-page', [
	    'uses' =>'IndexController@index',
	    'as' => 'admin.index'
	]);
	//Users
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
	Route::get('/admin/quanlynguoidung/sua-nguoi-dung/{macaddress}', [
	    'uses' =>'UserController@getedit',
	    'as' => 'admin.user.edit'
	]);
	Route::post('/admin/quanlynguoidung/sua-nguoi-dung/{macaddress}', [
	    'uses' =>'UserController@postedit',
	    'as' => 'admin.user.edit'
	]);
	Route::get('/admin/quanlynguoidung/xoa-nguoi-dung/{macaddress}', [
	    'uses' =>'UserController@delete',
	    'as' => 'admin.user.delete'
	]);
	//Plants
	Route::get('/admin/quanlycaytrong', [
	    'uses' =>'PlantController@index',
	    'as' => 'admin.plant.index'
	]);
	Route::get('/admin/quanlycaytrong/them-cay-trong', [
	    'uses' =>'PlantController@getadd',
	    'as' => 'admin.plant.add'
	]);
	Route::post('/admin/quanlycaytrong/them-cay-trong', [
	    'uses' =>'PlantController@postadd',
	    'as' => 'admin.plant.add'
	]);
	Route::get('/admin/quanlycaytrong/sua-cay-trong/{id}', [
	    'uses' =>'PlantController@getedit',
	    'as' => 'admin.plant.edit'
	]);
	Route::post('/admin/quanlycaytrong/sua-cay-trong/{id}', [
	    'uses' =>'PlantController@postedit',
	    'as' => 'admin.plant.edit'
	]);
	Route::get('/admin/quanlycaytrong/xoa-cay-trong/{id}', [
	    'uses' =>'PlantController@delete',
	    'as' => 'admin.plant.delete'
	]);
	//keys
	Route::get('/admin/quanlykey', [
	    'uses' =>'KeyController@index',
	    'as' => 'admin.key.index'
	]);
	Route::get('/admin/quanlykey/them-key', [
	    'uses' =>'KeyController@getadd',
	    'as' => 'admin.key.add'
	]);
	Route::post('/admin/quanlykey/them-key', [
	    'uses' =>'KeyController@postAdd',
	    'as' => 'admin.key.add'
	]);
	Route::get('/admin/quanlykey/sua-key/{id}', [
	    'uses' =>'KeyController@getedit',
	    'as' => 'admin.key.edit'
	]);
	Route::post('/admin/quanlykey/sua-key/{id}', [
	    'uses' =>'KeyController@postedit',
	    'as' => 'admin.key.edit'
	]);
	Route::get('/admin/quanlykey/xoa-key/{id}', [
	    'uses' =>'KeyController@delete',
	    'as' => 'admin.key.delete'
	]);
	
});
