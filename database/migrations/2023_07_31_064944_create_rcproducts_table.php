<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRcproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcproducts', function (Blueprint $table) {
            $table->id();
            $table->string('rc_id')->nullable();
            $table->string('p_id')->nullable();
            $table->string('fob')->nullable();
            $table->string('retail_price')->nullable();
            $table->string('expiry')->nullable();
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
        Schema::dropIfExists('rcproducts');
    }
}
