<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_type_id');
            $table->boolean('is_registered_brand')->default(0);
            $table->foreignId('member_id')->default(0);
            $table->boolean('is_unbs_certified')->default(0);
            $table->boolean('eco_packaging_trained')->default(0);
            $table->boolean('recycles_packagin')->default(0);
            $table->foreignId('packaging_type');
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
        Schema::dropIfExists('product_details');
    }
}
