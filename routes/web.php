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

Route::get('/', 'SimpleCrudController@show');

Route::post('submit', 'SimpleCrudController@process');


Route::get('public/detail/{file?}', function($file = null) {
	$ctrl = new \App\Http\Controllers\SimpleCrudController();
	return $ctrl->get_details($file);
});