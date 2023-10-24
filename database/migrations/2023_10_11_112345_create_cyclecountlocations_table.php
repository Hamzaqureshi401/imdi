<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclecountlocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cyclecountlocations', function (Blueprint $table) {
            $table->id();
            $table->string('cc_id')->nullable();
            $table->string('bl_id')->nullable();
            $table->string('bl_name')->nullable();
            $table->string('bl_barcode')->nullable();
            $table->string('pallet_no')->nullable();
            
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
        Schema::dropIfExists('cyclecountlocations');
    }
}
