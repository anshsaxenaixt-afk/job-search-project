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
        Schema::create('worker_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')
              ->constrained('worker_profiles')
              ->cascadeOnDelete();

            $table->foreignId('skill_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unique(['worker_id', 'skill_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_skill');
    }
};
