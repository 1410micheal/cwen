<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToFollowupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('followup_logs', function (Blueprint $table) {
            
            $table->float('sales_volume')->nullable();
            $table->float('profit_margin')->nullable();
            $table->float('products_on_shelf')->nullable();
            $table->integer('employ_count')->nullable();
            $table->string('trade_mark_registration')->nullable();
            $table->string('ursb_registration')->nullable();
            $table->string('unbs_certification')->nullable();
            $table->string('new_product_name')->nullable();
            $table->string('ursb_name_reservation')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('followup', function (Blueprint $table) {
            //
        });
    }
}
