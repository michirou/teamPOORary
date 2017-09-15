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
            $table->string('username');
            $table->string('password');
            $table->string('first-name');
            $table->string('middle-name');
            $table->string('last-name');
            $table->string('address');
            $table->string('card-number');
            $table->string('social-media-acc');
            $table->string('work');
            $table->string('type-of-work');
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
