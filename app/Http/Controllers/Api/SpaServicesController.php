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
}
