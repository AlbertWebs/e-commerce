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
        Schema::create('b2c_api_response', function (Blueprint $table) {
            $table->integer('b2bID');
            $table->string('TransactionReceipt', 15);
            $table->string('TransactionAmount', 10);
            $table->string('B2CWorkingAccountAvailableFunds', 10);
            $table->string('B2CUtilityAccountAvailableFunds', 10);
            $table->string('TransactionCompletedDateTime', 20);
            $table->string('ReceiverPartyPublicName', 30);
            $table->string('B2CChargesPaidAccountAvailableFunds', 10);
            $table->string('B2CRecipientIsRegisteredCustomer', 2);
            $table->dateTime('UpdatedTime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b2c_api_response');
    }
};
