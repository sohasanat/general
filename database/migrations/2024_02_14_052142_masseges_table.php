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
        Schema::create('tiketmassege', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tiket_id');
            $table->foreign('tiket_id')->references('id')->on('tiket')->onDelete('cascade');
            $table->string('Description');
            $table->string('from');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiketmassege');
    }
};
