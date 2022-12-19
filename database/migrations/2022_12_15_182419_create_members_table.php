<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->date('date_registered')->nullable();
            $table->string('unique_id',50);
            $table->string('first_name',35);
            $table->string('middle_name',35)->nullable();
            $table->string('last_name',35);
            $table->foreignId('member_category_id');
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender',10);
            $table->string('marital_status',10);
            $table->foreignId('village_id');
            $table->string('email',50)->nullable();
            $table->string('telephone',50)->nullable();
            $table->string('hiv_status')->default('Negative');
            $table->string('education_level')->nullable();
            $table->text('narrative')->nullable();
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
        Schema::dropIfExists('members');
    }
}
