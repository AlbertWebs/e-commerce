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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->string('slung');
            $table->integer('price_raw')->nullable();
            $table->tinyInteger('offer')->default(0);
            $table->string('stock')->default('In Stock');
            $table->text('meta')->nullable();
            $table->string('price', 191)->nullable();
            $table->integer('shipping')->default(500);
            $table->string('cat', 191)->nullable();
            $table->string('sub_cat', 191)->nullable();
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('trending')->default(0);
            $table->tinyInteger('banner')->default(0);
            $table->tinyInteger('slider')->default(0);
            $table->integer('stocks')->default(3);
            $table->string('conditions')->default('New');
            $table->string('code', 191)->nullable();
            $table->string('brand')->nullable();
            $table->string('full', 11)->default('0');
            $table->text('content')->nullable();
            $table->string('image_one', 191)->nullable();
            $table->string('offer_banner')->nullable();
            $table->string('image_two', 191)->nullable();
            $table->string('image_three', 191)->nullable();
            $table->string('image_four', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
