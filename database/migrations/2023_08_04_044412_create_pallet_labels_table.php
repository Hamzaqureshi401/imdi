<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalletLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pallet_labels', function (Blueprint $table) {
            $table->id();
            $table->string('rc_id')->nullable();
            $table->string('palletno')->nullable();
            $table->string('mc_id')->nullable();
            $table->string('mc_qty')->nullable();
            $table->string('avl_qty')->nullable();
            $table->string('status')->nullable();
            $table->string('warehouse')->nullable();
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
        Schema::dropIfExists('pallet_labels');
    }
}
