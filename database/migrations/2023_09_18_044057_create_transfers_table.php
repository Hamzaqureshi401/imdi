<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('p_warehouse')->nullable();
            $table->string('p_pl_no')->nullable();
            $table->string('p_pid')->nullable();
            $table->string('p_location')->nullable();
            $table->string('p_bid')->nullable();

            $table->string('n_warehouse')->nullable();
            $table->string('n_pl_no')->nullable();
            $table->string('n_pid')->nullable();
            $table->string('n_location')->nullable();
            $table->string('n_bid')->nullable();

            $table->string('pick_status')->nullable();
            $table->string('pick_by')->nullable();
            $table->string('picked_at')->nullable();

            $table->string('placed_status')->nullable();
            $table->string('placed_by')->nullable();
            $table->string('placed_at')->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
