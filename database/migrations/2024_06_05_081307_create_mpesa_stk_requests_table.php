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
        Schema::create('mpesa_stk_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 191);
            $table->double('amount');
            $table->string('reference', 191);
            $table->string('description', 191);
            $table->string('status', 191)->default('Requested');
            $table->boolean('complete')->default(true);
            $table->string('MerchantRequestID', 191)->unique();
            $table->string('CheckoutRequestID', 191)->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_stk_requests');
    }
};
