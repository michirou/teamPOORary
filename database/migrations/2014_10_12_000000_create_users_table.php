<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 60);
            $table->string('password');
            $table->string('account_name', 60);
            $table->string('email', 20);
            $table->string('address');
            $table->string('card_num', 16);
            $table->string('socmed_acc');
            $table->string('work');
            $table->string('salary');
            $table->string('numyears_working');
            $table->string('credit_score');
            $table->string('social_score');
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
        Schema::dropIfExists('users');
    }
}
