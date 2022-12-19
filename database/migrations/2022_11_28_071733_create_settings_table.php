<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('system_name');
            $table->string('logo')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('password_expiration_days')->default(60);
            $table->integer('login_max_retries')->default(5);
            $table->integer('two_factor_enabled')->default(0);
            $table->string('system_email')->nullable();
            $table->string('main_layout')->nullable();
            $table->integer('super_admin_id')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
