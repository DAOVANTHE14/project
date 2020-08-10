<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->float('phone');
            $table->date('birthday');
            $table->string('gender');
            $table->string('address');
            $table->string('password');
            $table->integer('role');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::table('user', function (Blueprint $table) {
             $table->string('email')->unique()->change();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
