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

/*Route::group(['middleware'=>'web'],function(){
	Route::auth();
});*/

Route::group(['middleware'=>['web','auth']],function(){
	Route::get('/home', function(){
		if (Auth::user()->isAdmin == 1) {
			return redirect('/dashboard');
			# code...
		}else{
			$users['users'] = \App\User::all();
			return view('show', $users);
		}
	});
});

/*Route::get('admin',['middleware'=>['web','auth','admin'],function(){
	return view('home');
}]);*/

/*Route::get('/home', 'HomeController@admin')->middleware('admin');*/
Route::get('/admin','AdminController@index');

Auth::routes();

Route::get('/dashboard','salesController@index' );
Route::get('/show','salesController@detail' );
Route::post('/dashboard','salesController@store');
Route::get('/dashboard/{id}','salesController@getData');
Route::put('/dashboard/{id}','salesController@update');

/*Route::get('/getData/{id}','salesController@getData');*/
Route::delete('/dashboard/{id}','salesController@destroy');
Route::get('/read/{id}','salesController@show');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


