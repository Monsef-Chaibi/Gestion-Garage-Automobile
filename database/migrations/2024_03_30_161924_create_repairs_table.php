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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('status');
            $table->date('startDate');
            $table->date('endDate')->nullable();
            $table->text('mechanicNotes')->nullable();
            $table->text('clientNotes')->nullable();
            $table->foreignId('mechanicID')->constrained('users');
            $table->foreignId('vehicleID')->constrained('vehicles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
