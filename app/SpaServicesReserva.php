<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaServicesReserva extends Model
{
    protected $table = 'spa_services_reserva';

    protected $fillable = array('service_id','nombre','commentarios','dia','hora','precio');

}
