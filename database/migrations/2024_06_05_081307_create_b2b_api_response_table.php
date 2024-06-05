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
        Schema::create('b2b_api_response', function (Blueprint $table) {
            $table->integer('b2bTransactionID');
            $table->string('TransactionID');
            $table->string('InitiatorAccountCurrentBalance');
            $table->string('DebitAccountCurrentBalance');
            $table->string('Amount');
            $table->string('DebitPartyAffectedAccountBalance');
            $table->string('TransCompletedTime');
            $table->string('DebitPartyCharges');
            $table->string('ReceiverPartyPublicName');
            $table->string('Currency');
            $table->dateTime('UpdatedTime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b2b_api_response');
    }
};
