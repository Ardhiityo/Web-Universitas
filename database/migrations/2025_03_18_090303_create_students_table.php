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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('nickname');
            $table->string('email');
            $table->string('phone');
            $table->foreignId('entry_scheme_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('image');
            $table->foreignId('study_program_1_id')->constrained('study_programs')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('study_program_2_id')->constrained('study_programs')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
