<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('navbar', function (Blueprint $table) {

            $table->id();

            $table->string('nombre');
            $table->string('url')->nullable();
            $table->unsignedBigInteger('idpadre')->nullable();
            $table->unsignedBigInteger('idhijo')->nullable();
            $table->integer('orden')->default(1);
            $table->boolean('estatus')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('navbar');
    }
};