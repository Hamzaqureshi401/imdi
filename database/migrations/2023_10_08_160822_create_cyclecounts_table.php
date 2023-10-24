<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclecountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cyclecounts', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse')->nullable();
            $table->string('rack')->nullable();
            $table->string('start_location')->nullable();
            $table->string('end_location')->nullable();
            $table->string('user')->nullable();
            $table->string('closed_at')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('cyclecounts');
    }
}
