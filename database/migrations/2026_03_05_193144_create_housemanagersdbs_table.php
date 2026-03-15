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
        Schema::create('housemanagersdbs', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('idnum');
            $table->string('phone')->nullable();
            $table->string('whatsnum')->nullable();
            $table->string('loc')->nullable();
            $table->string('county')->nullable();
            $table->string('gen')->nullable();
            $table->string('email')->nullable();
            $table->string('pri')->default('0');
            $table->string('sec')->nullable();
            $table->string('coll')->nullable();
            $table->string('pass')->default('0');
            $table->string('fempl')->default('0');
            $table->string('pay')->nullable();
            $table->string('uni')->nullable();
            $table->string('inter')->nullable();
            $table->string('jobtype')->nullable();
            $table->string('status')->nullable();
            $table->string('clientid')->nullable();
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
        Schema::dropIfExists('housemanagersdbs');
    }
};
