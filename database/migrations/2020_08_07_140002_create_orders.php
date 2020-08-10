<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('name');
            $table->string('Country');
            $table->string('city');
            $table->string('district');
            $table->string('commune');
            $table->string('meta_desc');
            $table->tinyInteger('status');
            $table->string('email');
            $table->float('phone');
            $table->string('note');
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
        Schema::dropIfExists('orders');
    }
}
