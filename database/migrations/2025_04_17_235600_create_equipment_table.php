<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_type_id')->constrained()->onDelete('cascade');
            $table->string('serial_number');
            $table->text('note')->nullable();
            $table->timestamps();

            $table->unique(['equipment_type_id', 'serial_number']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('equipment');
    }
};
