<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOriginData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('origin_data', function (Blueprint $table) {
            $table->string('customer_name');
            $table->text('customer_address');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('customer_address_detail')->nullable();
            $table->string('customer_zip_code');
            $table->string('zone_code');
            $table->unsignedBigInteger('organization_id');
           
            $table->unsignedBigInteger('location_id');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('origin_data');
    }
}
