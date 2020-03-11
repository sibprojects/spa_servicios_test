<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpaServicesController extends Controller
{
    // getting spa services json
		public function getServices(){

			$services = \App\SpaServices::all();

			return response()->json([
				'services' => $services,
			]);
		}

		public function getServicesByLanguageIso3($lng){

			// get with translate
			$services = \App\SpaServices::with(['language' => function ($query) use ($lng){
							    	$query->where('lng_iso3', $lng);
									}])->get();

			$result = [];

			// separate translation fields from result
			foreach($services as $service){
				if(isset($service['language'])){
					$service['nombre'] = $service['language']['nombre'];
					$service['descripcion'] = $service['language']['descripcion'];
				}
				unset($service['language']);

				$result[] = $service;
			}

			return response()->json([
				'services' => $result,
			]);
		}
}
