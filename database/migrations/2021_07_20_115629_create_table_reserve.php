<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReserve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('uid')->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('pid')->foreign('pid')->references('id')->on('place')->onDelete('cascade');
            $table->integer('amount')->nullable();;
            $table->date('date');
            $table->integer('section');
            $table->integer('reserve_status');
            $table->integer('payment_status');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reserve');
    }
}
