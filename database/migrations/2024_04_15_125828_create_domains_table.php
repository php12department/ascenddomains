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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_uppercase')->nullable();
            $table->string('tags')->nullable();
            $table->string('length');
            $table->string('extension');
            $table->string('registrar');
            $table->date('exp_date')->nullable();
            $table->date('reg_date')->nullable();
            $table->string('pattern');
            $table->string('bin');
            $table->string('min_offer');
            $table->string('floor_usd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
