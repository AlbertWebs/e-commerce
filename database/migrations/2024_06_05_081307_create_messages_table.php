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
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->text('content')->nullable();
            $table->integer('status')->default(0);
            $table->string('email', 191)->nullable();
            $table->string('mobile')->nullable();
            $table->string('title', 191)->nullable();
            $table->string('subject', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
