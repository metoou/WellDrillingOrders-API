<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWellDrillingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('well_drilling_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer');
            $table->string('contractor');
            $table->string('oilField');
            $table->string('wellNumber');
            $table->string('wellPurpose');
            $table->string('drillingRig');
            $table->string('wellDesign');
            $table->string('direction');
            $table->string('conductor');
            $table->string('operatingColumn');
            $table->string('diameter');
            $table->string('artificialFaceDepth');
            $table->string('installationDepth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('well_drilling_orders');
    }
}
