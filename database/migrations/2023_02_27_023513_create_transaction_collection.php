<?php

use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('transaction_collection', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('transaction_id')->nullable(false);
            $table->integer('customer_code')->nullable(false);
            $table->integer('customer_code')->nullable(false);
            $table->integer('transaction_amount')->nullable(false);
            $table->integer('transaction_discount')->nullable(false);
            $table->string('transaction_additional_field')->nullable(false);
            $table->integer('transaction_payment_type')->nullable(true);
            $table->enum('transaction_state', ['PAID', 'NOT PAID'])->default('PAID');
            $table->string('transaction_code')->nullable(false);
            $table->integer('transaction_order')->nullable(false);
            $table->string('location_id')->nullable(false);
            $table->integer('organization_id')->nullable(false);
            $table->enum('transaction_payment_type_name', ['INVOICE', 'DP'])->default('DP');
            $table->integer('transaction_cash_amount')->default(0);
            $table->integer('transaction_cash_change')->default(0);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('transaction_collection');
    }
}
