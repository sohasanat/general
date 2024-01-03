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
        Schema::create('jobskills', function (Blueprint $table) {
            $table->id();
            $table->string('skillsDescription');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('definitionjobs')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobskills');
    }
};
