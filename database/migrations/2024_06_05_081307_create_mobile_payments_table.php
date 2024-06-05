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
        Schema::create('mobile_payments', function (Blueprint $table) {
            $table->integer('transLoID', true);
            $table->string('TransactionType', 10);
            $table->string('TransID', 10)->unique('transid');
            $table->string('TransTime', 14);
            $table->double('TransAmount');
            $table->string('BusinessShortCode', 6);
            $table->string('BillRefNumber', 200);
            $table->string('InvoiceNumber', 6);
            $table->string('OrgAccountBalance', 10);
            $table->string('ThirdPartyTransID', 10);
            $table->string('MSISDN', 14);
            $table->string('FirstName', 10)->nullable();
            $table->string('MiddleName', 10)->nullable();
            $table->string('LastName', 10)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('user_id')->nullable();
            $table->dateTime('lastUpdate')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_payments');
    }
};
