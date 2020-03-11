<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpaserviceslngTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_services_lng', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->index();
            $table->string('lng_iso3',3)->index();
            $table->string('nombre',255);
            $table->text('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_services_lng');
    }
}
