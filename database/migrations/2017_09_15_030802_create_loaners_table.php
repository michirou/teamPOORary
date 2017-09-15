<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaners', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('first_name', 60);
            $table->string('middle_name', 60);
            $table->string('last_name', 60);
            $table->string('address', 60);
            $table->string('contact-num', 11);
            $table->integer('points');
            $table->string('username', 20);
            $table->string('password');
            $table->string('income');
            $table->string('card-num', 16);
            $table->string('bus-type');
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
        Schema::dropIfExists('loaners');
    }
}
