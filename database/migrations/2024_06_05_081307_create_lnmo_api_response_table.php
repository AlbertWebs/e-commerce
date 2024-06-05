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
        Schema::create('lnmo_api_response', function (Blueprint $table) {
            $table->integer('lnmoID', true);
            $table->string('Amount', 20);
            $table->string('MpesaReceiptNumber', 20);
            $table->string('TransactionDate', 20);
            $table->string('OrgAccountBalance')->nullable();
            $table->string('PhoneNumber', 15);
            $table->tinyInteger('status')->default(0);
            $table->dateTime('updateTime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lnmo_api_response');
    }
};
