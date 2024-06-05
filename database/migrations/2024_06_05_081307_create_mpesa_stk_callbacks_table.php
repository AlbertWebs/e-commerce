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
        Schema::create('mpesa_stk_callbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MerchantRequestID', 191)->index();
            $table->string('CheckoutRequestID', 191)->index();
            $table->integer('ResultCode');
            $table->string('ResultDesc', 191);
            $table->double('Amount')->nullable();
            $table->string('MpesaReceiptNumber', 191)->nullable();
            $table->string('Balance', 191)->nullable();
            $table->string('TransactionDate', 191)->nullable();
            $table->string('PhoneNumber', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_stk_callbacks');
    }
};
