<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('extention_name')->nullable();
            $table->string('birthday')->nullable();
            $table->string('rel_head')->nullable();
            $table->string('marital_status')->nullable();
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->string('education')->nullable();
            $table->string('mobile_num')->nullable();
            $table->string('telephone_num')->nullable();
            $table->string('email')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->text('employment_record')->nullable();
            $table->text('house_built')->nullable();
            $table->text('business_name')->nullable();
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
        Schema::dropIfExists('residents');
    }
}
