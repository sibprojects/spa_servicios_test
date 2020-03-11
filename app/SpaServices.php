<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaServices extends Model
{
    protected $table = 'spa_services';

    public function language()
    {
        return $this->hasOne('\App\SpaServicesLng', 'service_id');
    }

}
