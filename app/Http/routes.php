<?php
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
/***********************/
Route::get('ajax', function()
{
	return View::make('index');
});


Route::post('gethint', function()
{
	$datos=DB::table('datos')->get();

	$resultado =Input::get('valorCaja1') + Input::get('valorCaja2');
	
	return Response::json( array(
		'resultado' => $resultado, 
		'sms' => " Parametro AJAX y JSON", 
		'datos' => $datos, 
		));

});

/**************************/