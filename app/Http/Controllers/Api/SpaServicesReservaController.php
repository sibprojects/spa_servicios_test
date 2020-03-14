<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpaServicesReservaController extends Controller
{
		// get all reservas
		public function getReservas(){

			$reservas = \App\SpaServicesReserva::all();

			return response()->json([
				'reservas' => $reservas,
			]);
		}

		//
		public function addReservaForm(){

			$services = \App\SpaServices::all();
			$vars = [ 'services'=>$services ];
	    return response()->view('createReserva', $vars);
		}

    // create new spa reserva
		public function create(Request $request){

			$data = $request->all();

			// check reserva exists
			$service = \App\SpaServices::where('id',$data['service_id'])->first();
			if(!isset($service['id'])){
				return response()->json([
					'error' => 'Servicio no encontrado!',
				]);
			}

			// check day is busy
			$otherReserva = \App\SpaServicesReserva::where([ 'service_id'=>$data['service_id'],'dia'=>$data['dia'],'hora'=>$data['hora'] ])->first();
			if(isset($otherReserva['id'])){
				return response()->json([
					'error' => 'Hora no esta disponible!',
				]);
			}

			$reserva = new \App\SpaServicesReserva;
			$reserva->fill([
											  'service_id' => $data['service_id'],
										    'nombre' => $data['nombre'],
										    'commentarios' => $data['commentarios'],
										    'dia' => $data['dia'],
										    'hora' => $data['hora'],
										    'precio' => $service['precio'],
										]);
			$reserva->save();

			$result = [];

			return response()->json([
				'result' => 'success',
				'reserva_id' => $reserva['id'],
			]);
		}
}
