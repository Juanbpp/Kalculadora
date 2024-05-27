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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('DNI')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('impuesto');
            $table->integer('id_net')->nullable();
            $table->integer('id_convergente')->nullable();
            $table->integer('id_tv')->nullable();
            $table->integer('id_descuento')->nullable();
            $table->integer('id_adicional_1')->nullable();
            $table->integer('id_adicional_2')->nullable();
            $table->integer('id_adicional_3')->nullable();
            $table->integer('id_adicional_4')->nullable();
            $table->integer('id_adicional_5')->nullable();
            $table->integer('cantidad_adicional_1')->nullable();
            $table->integer('cantidad_adicional_2')->nullable();
            $table->integer('cantidad_adicional_3')->nullable();
            $table->integer('cantidad_adicional_4')->nullable();
            $table->integer('cantidad_adicional_5')->nullable();
            $table->integer('id_movil_1')->nullable();
            $table->integer('id_movil_2')->nullable();
            $table->integer('id_movil_3')->nullable();
            $table->integer('id_movil_4')->nullable();
            $table->integer('id_movil_5')->nullable();
            $table->integer('cantidad_movil_1')->nullable();
            $table->integer('cantidad_movil_2')->nullable();
            $table->integer('cantidad_movil_3')->nullable();
            $table->integer('cantidad_movil_4')->nullable();
            $table->integer('cantidad_movil_5')->nullable();
            $table->integer('descuento_movil_1')->nullable();
            $table->integer('descuento_movil_2')->nullable();
            $table->integer('descuento_movil_3')->nullable();
            $table->integer('descuento_movil_4')->nullable();
            $table->integer('descuento_movil_5')->nullable();
            $table->float('pvp')->nullable();
            $table->longText('codificacion')->nullable();
            $table->string('observaciones')->nullable();
            $table->integer('id_codificacion')->nullable();
            $table->integer('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
