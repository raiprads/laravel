<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups' => ['web']], function(){

	Route::get('begin', function () {

		// session(['foo' => 'bar']);
		// Session::put('foo','bar');
		// session::get('foo'); // bar

		//Session::flash('status','Hello there!');

		flash('You are now signed in!');


		return redirect('/'); //Redirect::to('/');

	});

	// Route::get('/', function (RegisteredUsers $registration) {
	    
	// 	var_dump($registration);

	//     //return view('welcome');
	// });

});
