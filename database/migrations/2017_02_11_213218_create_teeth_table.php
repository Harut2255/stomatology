<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeethTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teeth', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('visit_id')->unsigned()->default(1);
            $table->foreign('visit_id')->references('id')->on('visits');
            $table->integer('tooth');
            $table->string('tooth_ill');

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
        Schema::drop('teeth');
    }
}
