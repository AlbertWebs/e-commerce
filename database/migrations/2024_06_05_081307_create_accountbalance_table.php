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
        Schema::create('accountbalance', function (Blueprint $table) {
            $table->integer('accountBalID', true);
            $table->string('WorkingAccount', 20);
            $table->string('FloatAccount', 20);
            $table->string('UtilityAccount', 20);
            $table->string('ChargesPaidAccount', 20);
            $table->string('OrganizationSettlementAccount', 20);
            $table->string('BOCompletedTime', 50);
            $table->dateTime('updatedTime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accountbalance');
    }
};
