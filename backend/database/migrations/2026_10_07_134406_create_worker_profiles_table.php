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
        Schema::create('worker_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
              ->unique()
              ->constrained()
              ->cascadeOnDelete();

            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('location')->nullable();
            $table->text('bio')->nullable();
            $table->string('available_days')->nullable();
            $table->string('available_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_profiles');
    }
};
