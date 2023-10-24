<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinlocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binlocations', function (Blueprint $table) {
            $table->id();
            $table->string('row_id')->nullable();
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->string('status')->nullable();
            $table->string('labelid')->nullable();
            $table->string('mcid')->nullable();
            $table->string('rcid')->nullable();
            $table->string('custom')->nullable();
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
        Schema::dropIfExists('binlocations');
    }
}
