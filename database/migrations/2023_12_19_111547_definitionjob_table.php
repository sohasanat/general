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
        Schema::create('definitionjobs', function (Blueprint $table) {
            $table->id();
            $table->string('expertise');
            $table->string('expertisedescription');
            $table->string('skills');
            $table->string('skillsdescription');
            $table->string('title');
            $table->string('Description');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('definitionjobs');
    }
};
