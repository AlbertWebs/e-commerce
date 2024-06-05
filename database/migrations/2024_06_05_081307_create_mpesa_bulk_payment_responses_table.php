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
        Schema::create('mpesa_bulk_payment_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('ResultType');
            $table->smallInteger('ResultCode');
            $table->string('ResultDesc', 191);
            $table->string('OriginatorConversationID', 191);
            $table->string('ConversationID', 191);
            $table->string('TransactionID', 191);
            $table->longText('ResultParameters')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_bulk_payment_responses');
    }
};
