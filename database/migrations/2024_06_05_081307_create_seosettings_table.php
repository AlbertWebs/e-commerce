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
        Schema::create('seosettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename', 191)->nullable();
            $table->text('intro')->nullable();
            $table->string('email', 191)->nullable();
            $table->string('email_one', 191)->nullable();
            $table->string('tagline', 191)->nullable();
            $table->string('url', 191)->nullable();
            $table->string('location', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('facebook', 191)->nullable();
            $table->string('twitter', 191)->nullable();
            $table->string('linkedin', 191)->nullable();
            $table->string('instagram', 191)->nullable();
            $table->string('youtube', 191)->nullable();
            $table->string('google', 191)->nullable();
            $table->text('welcome')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seosettings');
    }
};
