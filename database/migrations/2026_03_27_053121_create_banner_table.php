<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {

            $table->id();

            $table->string('titulo');
            $table->string('subtitulo')->nullable();

            $table->foreignId('cat_imagen_id')
                    ->nullable()
                    ->constrained('cat_imagen')
                    ->nullOnDelete();

            // BOTÓN 1
            $table->boolean('btn1_activo')->default(0);
            $table->string('btn1_texto')->nullable();
            $table->string('btn1_url')->nullable();

            // BOTÓN 2
            $table->boolean('btn2_activo')->default(0);
            $table->string('btn2_texto')->nullable();
            $table->string('btn2_url')->nullable();

            // CONTROL
            $table->boolean('estatus')->default(1);
            $table->integer('orden')->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banner');
    }
};
