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
        Schema::create('clientdbs', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('loc')->nullable();
            $table->string('phone')->nullable();
            $table->string('gen')->nullable();
            $table->string('email')->nullable();
            $table->string('hsize')->default('0');
            $table->string('status')->nullable();
            $table->string('gid')->nullable();
            $table->string('nump')->default('0');
            $table->string('numg')->default('0');
            $table->string('pay')->nullable();
            $table->string('uni')->nullable();
            $table->string('inter')->nullable();
            $table->string('app')->nullable();
            $table->string('foth1')->nullable();
            $table->string('foth2')->nullable();
            $table->string('foth3')->nullable();
            $table->string('foth4')->nullable();
            $table->string('foth5')->nullable();
            $table->string('foth6')->nullable();
            $table->string('foth7')->nullable();
            $table->string('foth8')->nullable();
            $table->string('foth9')->nullable();
            $table->string('foth10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientdbs');
    }
};
