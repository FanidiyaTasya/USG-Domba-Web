<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('initial_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sheep_id')->constrained('sheep');
            $table->foreignId('user_id')->constrained('users');
            $table->string('symptom_1');
            $table->string('symptom_2');
            $table->string('symptom_3');
            $table->date('check_date');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initial_assessments');
    }
};
