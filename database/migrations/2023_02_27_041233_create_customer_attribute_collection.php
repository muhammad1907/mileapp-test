<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAttributeCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('customer_attribute_collection', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sales')->nullable(false);
            $table->string('top')->nullable(false);
            $table->string('jenis_pelanggan')->nullable(false);
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
        Schema::connection('mongodb')->dropIfExists('customer_attribute_collection');
    }
}
