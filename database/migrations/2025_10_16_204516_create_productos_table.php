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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // BIGINT AUTO_INCREMENT PRIMARY KEY
            $table->string('nombre', 200); // VARCHAR(200) NOT NULL
            $table->text('descripcion')->nullable(); // TEXT NULL
            $table->decimal('precio', 10, 2); // DECIMAL(10,2) NOT NULL
            $table->integer('stock')->default(0); // INT NOT NULL DEFAULT 0
            $table->unsignedBigInteger('categoria_id'); // FOREIGN KEY
            $table->string('codigo_barras', 50)->unique(); // VARCHAR(50) UNIQUE
            $table->string('imagen', 255)->nullable(); // VARCHAR(255) NULL
            $table->boolean('activo')->default(true); // BOOLEAN DEFAULT TRUE
            $table->timestamps(); // created_at y updated_at

            // Clave foránea hacia tabla categorias
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
