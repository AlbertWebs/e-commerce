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
        Schema::create('mpesa_bulk_payment_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('conversation_id', 191);
            $table->string('originator_conversation_id', 191);
            $table->double('amount');
            $table->string('phone', 20);
            $table->string('remarks', 191)->nullable();
            $table->string('CommandID', 191)->default('BusinessPayment');
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_bulk_payment_requests');
    }
};
