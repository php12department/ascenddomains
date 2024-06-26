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
        Schema::create('blog_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->text('content');
            $table->tinyInteger('is_delete')->default(0)->comment('0: Not Deleted, 1: Deleted');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_details');
    }
};
