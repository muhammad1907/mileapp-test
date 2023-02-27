<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoilData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('koil_data', function (Blueprint $table) {
            $table->id();
            $table->integer('koli_length');
            $table->string('awb_url');
            $table->timestamp('created_at');
            $table->float('koli_chargeable_weight');
            $table->integer('koli_width');
            $table->json('koli_surcharge');
            $table->integer('koli_height');
            $table->timestamp('updated_at');
            $table->string('koli_description');
            $table->integer('koli_formula_id')->nullable();
            $table->string('connote_id');
            $table->float('koli_volume');
            $table->float('koli_weight');
            $table->string('koli_id');
            $table->json('koli_custom_field');
            $table->string('koli_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koil_data');
    }
}
