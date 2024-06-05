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
        Schema::create('transaction_status', function (Blueprint $table) {
            $table->integer('transactionStatusID', true);
            $table->string('ReceiptNo', 20);
            $table->string('ConversationID', 50);
            $table->string('FinalisedTime', 25);
            $table->string('Amount', 20);
            $table->string('TransactionStatus', 20);
            $table->string('ReasonType', 50);
            $table->string('DebitPartyCharges', 20);
            $table->string('DebitAccountType', 20);
            $table->string('InitiatedTime', 20);
            $table->string('OriginatorConversationID', 20);
            $table->string('CreditPartyName', 55);
            $table->string('DebitPartyName', 50);
            $table->dateTime('updatedTime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_status');
    }
};
