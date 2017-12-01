<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('customer_id')->unsigned()->default(1);
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->text('mouth_state');
            $table->integer('kc_type');
            $table->text('examination');
            $table->integer('gigienik');
            $table->text('reason_subject');
            $table->text('reason_object');
            $table->text('diagnosis');
            $table->text('treat');
            $table->integer('price');
            $table->integer('primaryprice');
            $table->integer('debt');
            $table->string('doctor');
            $table->string('code');
            $table->string('images');

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
        Schema::drop('visits');
    }
}
