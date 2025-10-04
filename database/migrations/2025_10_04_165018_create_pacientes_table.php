<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_documento_id')->constrained('tipos_documento')->onDelete('restrict')->onUpdate('cascade');
            $table->string('numero_documento', 30);
            $table->string('nombre1', 100);
            $table->string('nombre2', 100)->nullable();
            $table->string('apellido1', 100);
            $table->string('apellido2', 100)->nullable();
            $table->foreignId('genero_id')->constrained('generos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('departamento_id')->constrained('departamentos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('municipio_id')->constrained('municipios')->onDelete('restrict')->onUpdate('cascade');
            $table->string('correo', 150)->unique();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
