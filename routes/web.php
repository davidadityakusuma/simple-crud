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
	if ($file == null) {
		# code...
		return Redirect::to('/');
	}
	else {
		try {
			$content = Storage::disk('public')->get($file.".txt");
			$data = explode(",", $content);
			return view('SimpleCRUD.details')->with(['name'=>$data[0], 'mail'=>$data[1], 'date'=>$data[2], 'addr'=>$data[3]]);
		} catch (Exception $e) {
			return Redirect::to('/');
		}
	}
});