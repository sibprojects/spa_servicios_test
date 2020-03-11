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

Route::get('/', function () {
    return view('welcome');
});

/* here we can test addign new reserva */
Route::get('/createReserva', function () {
    return view('createReserva');
});

// Api methods
Route::group(['prefix'=>'api'],function(){

	/* get all Spa services */
	Route::get('/spa/services','Api\SpaServicesController@getServices');

	/* get all Spa services by language iso3 code */
	Route::get('/spa/services/{lng}','Api\SpaServicesController@getServicesByLanguageIso3')
		->where(['lng' => '[A-Za-z]{3}']);;

	/* get all Spa Horarios by dates dd.mm.YYYY-dd.mm.YYYY */
	Route::get('/spa/services/horario/{inicialDate}-{finalDate}','Api\SpaServicesHorarioController@getHorario');

	/* get all Spa reservas */
	Route::get('/spa/services/reserva','Api\SpaServicesReservaController@getReservas');

	/* add Spa reserva */
	Route::post('/spa/services/reserva/create','Api\SpaServicesReservaController@create');

});
