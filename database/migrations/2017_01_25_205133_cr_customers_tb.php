<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrCustomersTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->date('date');
            $table->integer('sex');
            $table->string('place');
            $table->string('email');
            $table->string('tel');
            $table->text('allergic');
            $table->integer('bleeding');
            $table->text('new_illness');
            $table->integer('pregnant');
            $table->string('doctor');
            $table->rememberToken();

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
        Schema::drop('customers');
    }
}
