<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('bikes', function (Blueprint $t) {
            $t->id();
            $t->string('codigo')->unique(); // 👈 requerido por el seeder
            $t->enum('tipo', ['tradicional','electrica']);
            $t->enum('estado', ['disponible','mantenimiento','bloqueada'])->default('disponible');
            $t->foreignId('station_id')->nullable()->constrained('stations')->nullOnDelete();
            $t->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bikes');
    }
};
