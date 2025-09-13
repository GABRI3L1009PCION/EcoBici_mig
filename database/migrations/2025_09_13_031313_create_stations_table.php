<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('stations', function (Blueprint $t) {
            $t->id();
            $t->string('nombre'); // 👈 el nombre de la estación
            $t->enum('tipo', ['carga','descanso','seleccion']);
            $t->decimal('lat', 10, 7)->nullable();
            $t->decimal('lng', 10, 7)->nullable();
            $t->unsignedSmallInteger('capacidad')->default(10);
            $t->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('stations');
    }
};
