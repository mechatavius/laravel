<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
     

        Schema::create('planets', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('description');
            $table->integer('size_in_km');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    Schema::dropIfExists('planets');
    }
};