<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpaServicesHorarioController extends Controller
{
    // getting spa services timetable json
		public function getHorario($inicialDate, $finalDate){

			if(!$this->checkDate($inicialDate) || !$this->checkDate($finalDate)){
				return response()->json([
					'error' => 'Fecha en el formato incorrecto. Debe establecerse en el siguiente formato: dd.mm.YYYY',
				]);
			}

			$horario = \App\SpaServicesHorario::where('dia','>=',$this->formatDate($inicialDate))
									->where('dia','<',$this->formatDate($finalDate))
									->get();
			$result = [];
			foreach($horario as $key => $h){

				$horas = [];
				for($i=$h['inicio'];$i<=$h['fin'];$i++)
					$horas[$i] = true;

				$reservas = \App\SpaServicesReserva::where([ 'dia'=>$h['dia'],'service_id'=>$h['service_id'] ])->get();
				foreach($reservas as $reserva){
					$horas[ $reserva['hora'] ] = false;
				}

				$result[] = [
											'service_id' => $h['service_id'],
											'dia' => $h['dia'],
											'horas' => $horas,
										];
			}

			return response()->json([
				'horario' => $result,
			]);
		}

		private function checkDate($date){
			return preg_match('/^\d{2}[.]\d{2}[.]\d{4}$/', $date, $output_array);
		}

		private function formatDate($date){
			$date = explode('.',$date);
			return $date[2].'-'.$date[1].'-'.$date[0];
		}
}
