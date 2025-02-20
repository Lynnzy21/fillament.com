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
        Schema::create('rapotsantris', function (Blueprint $table) {
            $table->id();
            $table->string('santri_id')->nullable();
            $table->string('academic_year');
            $table->decimal('overal_score');
            $table->text('strength');
            $table->text('weaknesses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapotsantris');
    }
};
