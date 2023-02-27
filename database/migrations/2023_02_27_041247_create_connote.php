<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('connote', function (Blueprint $table) {
            $table->id();
            
            $table->uuid('connote_id')->unique();
            $table->integer('connote_number');
            $table->string('connote_service');
            $table->integer('connote_service_price');
            $table->integer('connote_amount');
            $table->string('connote_code')->unique();
            $table->string('connote_booking_code')->nullable();
            $table->integer('connote_order');
            $table->string('connote_state');
            $table->integer('connote_state_id');
            $table->string('zone_code_from');
            $table->string('zone_code_to');
            $table->integer('surcharge_amount')->nullable();
            $table->string('transaction_id')->nullable();
            $table->integer('actual_weight');
            $table->integer('volume_weight');
            $table->integer('chargeable_weight');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('organization_id');
            $table->string('location_id');
            $table->integer('connote_total_package');
            $table->integer('connote_surcharge_amount');
            $table->integer('connote_sla_day');
            $table->string('location_name');
            $table->string('location_type');
            $table->string('source_tariff_db');
            $table->string('id_source_tariff');
            $table->text('pod')->nullable();
            $table->json('history')->nullable();
        });
    }

   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('connote');
    }
}
