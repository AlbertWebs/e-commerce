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
        Schema::create('mpesa_c2b_callbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TransactionType', 191);
            $table->string('TransID', 191)->unique();
            $table->string('TransTime', 191);
            $table->double('TransAmount');
            $table->integer('BusinessShortCode');
            $table->string('BillRefNumber', 191);
            $table->string('InvoiceNumber', 191)->nullable();
            $table->string('ThirdPartyTransID', 191)->nullable();
            $table->double('OrgAccountBalance');
            $table->string('MSISDN', 191);
            $table->string('FirstName', 191)->nullable();
            $table->string('MiddleName', 191)->nullable();
            $table->string('LastName', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_c2b_callbacks');
    }
};
