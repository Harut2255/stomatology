<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrCustomerIllnessTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_illness', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('customer_id')->unsigned()->default(1);
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->integer('illness_id')->unsigned()->default(1);
            $table->foreign('illness_id')->references('id')->on('illnesses');

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
        Schema::drop('customer_illness');
    }
}
