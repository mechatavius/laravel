<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSolarSystemIdToPlanetsTable extends Migration
{
    public function up()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->unsignedBigInteger('solar_system_id');
            $table->foreign('solar_system_id')->references('id')->on('solar_systems');
        });
    }

    public function down()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropForeign(['solar_system_id']);
            $table->dropColumn('solar_system_id');
        });
    }
}
