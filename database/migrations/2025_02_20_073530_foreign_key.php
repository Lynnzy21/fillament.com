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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('kelas_santri_id')->references('id')->on('kelas_santris')->onDelete('cascade');
            $table->foreign('departemen_id')->references('id')->on('departemens')->onDelete('cascade');
            $table->foreign('program_stage_id')->references('id')->on('program_stages')->onDelete('cascade');
        });

        Schema::table('santri_families', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('kelas_santris', function(Blueprint $table){
            $table->foreign('mentor_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('lessons', function(Blueprint $table){
            $table->foreign('kelas_santri_id')->references('id')->on('kelas_santris')->onDelete('cascade');
        });

        Schema::table('assessments', function(Blueprint $table){
            $table->foreign('santri_id')->after('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lessons_id')->after('id')->references('id')->on('departemens')->onDelete('cascade');
        });

        Schema::table('rapotsantris', function(Blueprint $table){
            $table->foreign('santri_id')->after('id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });

        Schema::table('permissions', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('attachment_santris', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('attachment_id')->references('id')->on('attachments')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
