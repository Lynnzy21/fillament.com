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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name', 255)->nullable();
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->integer('generation')->nullable();
            $table->string('phone', 20)->nullable();
            $table->date('entry_date')->nullable();
            $table->date('graduate_date')->nullable();
            $table->string('status_graduate')->nullable();
            $table->string('nisn')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('kelas_santri_id')->nullable();
            $table->unsignedBigInteger('departmen_id')->nullable();
            $table->unsignedBigInteger('program_stage_id')->nullable();
            // $table->foreignId('kelas_santri_id')->constrained('classes')->onDelete('cascade');
            // $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            // $table->foreignId('program_stage_id')->constrained('program_stages')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
