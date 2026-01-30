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
        Schema::create('_housemanagers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('id number');
            $table->integer('phone number');
            $table->string('education level');
            $table->string('years of experience');
            $table->integer('former employer number');
            $table->string('housemanager residence');
            $table->string('next of kin details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_housemanagers');
    }
};
