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
            $table->foreign('kelas_santri_id')->references('id')->on('kelas_santris')->onDelete('set null');
            $table->foreign('departmen_id')->references('id')->on('departmens')->onDelete('set null');
            $table->foreign('program_stage_id')->references('id')->on('program_stages')->onDelete('set null');
        });

        Schema::table('santri_families', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('kelas_santris', function(Blueprint $table){
            $table->foreign('mentor_id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('departmens', function(Blueprint $table){
            $table->foreign('leader_id')->after('id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('co_leader_id')->after('id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('lessons', function(Blueprint $table){
            $table->foreign('kelas_santri_id')->references('id')->on('kelas_santris')->onDelete('set null');
        });

        Schema::table('assessments', function(Blueprint $table){
            $table->foreign('santri_id')->after('id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('lessons_id')->after('id')->references('id')->on('departmens')->onDelete('set null');
        });

        Schema::table('rapotsantris', function(Blueprint $table){
            $table->foreign('santri_id')->after('id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('set null');
        });

        Schema::table('permissions', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('attachment_santris', function (Blueprint $table) {
            $table->foreign('santri_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('attachment_id')->references('id')->on('attachments')->onDelete('set null');
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
