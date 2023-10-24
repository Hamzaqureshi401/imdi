<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiveds', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse')->nullable();
            $table->string('arr_date')->nullable();
            $table->string('order_no')->nullable();
            $table->string('container_no')->nullable();
            $table->string('mcid')->nullable();
            $table->string('ti')->nullable();
            $table->string('hi')->nullable();
            $table->string('mc_quantity')->nullable();
            $table->string('pallet_count')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('user')->nullable();
            $table->string('alloted')->nullable();
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
        Schema::dropIfExists('receiveds');
    }
}
