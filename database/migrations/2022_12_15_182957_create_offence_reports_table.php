<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffenceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offence_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id');
            $table->string('offence_nature');//Physical,Emotional,Social
            $table->timestamp('occurence_date');
            $table->foreignId('offence_type_id');
            $table->string('case_type')->default('NEW'); //old/new
            $table->string('survivor',50)->nullable();
            $table->string('perpecurator',50)->nullable();
            $table->text('services_offered')->nullable();
            $table->text('effects_on_biz')->nullable();
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
        Schema::dropIfExists('offence_reports');
    }
}
