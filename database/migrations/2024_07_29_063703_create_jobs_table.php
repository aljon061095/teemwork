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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company')->nullable();
            $table->string('description')->nullable();
            $table->string('pre_questionnaires')->nullable();
            $table->string('department');
            $table->string('hiring_manager')->nullable();
            $table->string('location')->nullable();
            $table->string('employment_type')->nullable();
            $table->integer('head_count')->nullable();
            $table->integer('salary_range')->nullable();
            $table->timestamp('posting_date')->useCurrent();
            $table->timestamp('application_deadline')->useCurrent();
            $table->string('job_pipeline_stages');
            $table->string('user_roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
