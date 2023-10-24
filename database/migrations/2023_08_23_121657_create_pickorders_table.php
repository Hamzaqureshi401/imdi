<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickorders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('trans_no')->nullable();
            $table->string('label_id')->nullable();
            $table->string('label_no')->nullable();
            $table->string('mc_id')->nullable();
            $table->string('rc_id')->nullable();
            $table->string('bin_id')->nullable();
            $table->string('qty')->nullable();
            $table->string('user')->nullable();
            $table->string('pick_status')->nullable();
            $table->string('pick_by')->nullable();
            $table->string('pick_date')->nullable();
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
        Schema::dropIfExists('pickorders');
    }
}
