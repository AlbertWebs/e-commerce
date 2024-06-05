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
        Schema::create('reverse_transaction', function (Blueprint $table) {
            $table->integer('transactionstatusID', true);
            $table->string('DebitAccountBalance', 25);
            $table->string('Amount', 20);
            $table->string('TransCompletedTime', 25);
            $table->string('OriginalTransactionID', 20);
            $table->string('Charge', 20);
            $table->string('CreditPartyPublicName', 50);
            $table->string('DebitPartyPublicName', 50);
            $table->dateTime('updateTime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reverse_transaction');
    }
};
