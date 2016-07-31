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

DB::listen(function($query){
	var_dump($query->sql, $query->bindings);
});


class Mailer{

}

class RegistersUsers
{

	protected $mailer;

	public function __construct(Mailer $mailer)
	{
			$this->mailer = $mailer;

	}

	public function setMailer(Mailer $mailer)
	{
			$this->mailer = $mailer;
	}
}

App::bind('RegistersUsers',function(){

	return new RegistersUsers(new Mailer);

});





Route::get('/', function (RegistersUsers $registration) {
    
	var_dump($registration);

    //return view('welcome');
});

Route::group(['middelwareGroup' => ['web']], function() {

	Route::get('posts' , 'PostController@index');

});
