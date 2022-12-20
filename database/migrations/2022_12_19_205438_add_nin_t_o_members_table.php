<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNinTOMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('followup_services', function (Blueprint $table) {
            $table->string('nin',20)->nullable();
            $table->string('phone_no',25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('followup_services', function (Blueprint $table) {
            $table->dropColumn('nin');
            $table->dropColumn('phone_no');
        });
    }
}
