<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth" middleware group. Now create something great!
|
*/
Route::group(
[
	'namespace' => 'Admin',
	'middleware' => 'auth'
], function () {
	Route::resource('posts', 'PostAdminPageController', [
		'as' => 'admin'
	])->only([
	    'edit', 'update', 'index'
	]);
});