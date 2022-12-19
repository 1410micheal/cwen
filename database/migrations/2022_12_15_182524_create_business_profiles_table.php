<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->boolean('has_biz_skills',2)->default(false);
            $table->foreignId('business_type_id');
            $table->foreignId('member_id');
            $table->integer('no_of_employees')->default(1);
            $table->foreignId('regulator_id')->nullable();
            $table->foreignId('village_id');
            $table->boolean('is_biz_owner')->default(1);
            $table->boolean('is_premise_owner')->default(0);
            $table->text('address_detail')->nullable();
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
        Schema::dropIfExists('business_profiles');
    }
}
