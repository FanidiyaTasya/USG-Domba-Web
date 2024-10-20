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
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessment_id')->constrained('initial_assessments');
            $table->float('temperature');
            $table->integer('heart_rate');
            $table->integer('respiratory_rate');
            // $table->float('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vital_signs');
    }
};
