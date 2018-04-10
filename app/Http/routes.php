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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('redis','RedisController@index');
Route::get('pub','RedisController@pub');
Route::get('send_mail','EmailController@index');
Route::get('send_hmail','EmailController@hMail');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['middleware'=>[]],function(){
    Route::resource('test','TestController');
});


