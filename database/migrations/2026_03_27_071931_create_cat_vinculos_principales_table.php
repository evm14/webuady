<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cat_vinculos_principales', function (Blueprint $table) {

            $table->id();

            $table->string('nombre');
            $table->string('url');
            $table->integer('orden')->default(1);
            $table->boolean('estatus')->default(1);
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('cat_vinculos_principales');
    }
};