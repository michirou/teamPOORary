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
            $table->string('username', 20);
            $table->string('password', 20);
            $table->string('first-name', 60);
            $table->string('middle-name', 60);
            $table->string('last-name', 60);
            $table->string('email', 20);
            $table->string('address');
            $table->string('card-number', 16);
            $table->string('social-media-acc');
            $table->string('work');
            $table->string('salary');
            $table->string('numyears-working');
            $table->string('credit-score');
            $table->string('social-score');
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
