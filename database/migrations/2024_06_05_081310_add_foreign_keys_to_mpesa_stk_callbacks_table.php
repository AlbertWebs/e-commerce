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
        Schema::table('mpesa_stk_callbacks', function (Blueprint $table) {
            $table->foreign(['CheckoutRequestID'])->references(['CheckoutRequestID'])->on('mpesa_stk_requests')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mpesa_stk_callbacks', function (Blueprint $table) {
            $table->dropForeign('mpesa_stk_callbacks_checkoutrequestid_foreign');
        });
    }
};
