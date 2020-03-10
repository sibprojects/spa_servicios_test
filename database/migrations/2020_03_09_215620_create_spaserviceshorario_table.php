<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpaserviceshorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_services_horario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->index();
						$table->date('dia')->index();
            $table->tinyInteger('inicio')->index();
            $table->tinyInteger('fin')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_services_horario');
    }
}
