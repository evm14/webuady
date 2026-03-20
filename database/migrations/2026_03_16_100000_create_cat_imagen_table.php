<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cat_imagen', function (Blueprint $table) {

            $table->id();

            $table->string('nombre');

            $table->string('ruta');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('cat_imagen');
    }
};