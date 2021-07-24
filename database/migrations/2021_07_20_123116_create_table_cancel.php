<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCancel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancel', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cuid')->foreign('uid')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('rid')->foreign('rid')->references('id')->on('reserve')->onDelete('cascade');

            $table->string('details')->nullable();;


            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_cancel');
    }
}
