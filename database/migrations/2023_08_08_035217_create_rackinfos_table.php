<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRackinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rackinfos', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse')->nullable();
            $table->string('rowtitle')->nullable();
            $table->string('length')->nullable();
            $table->string('format')->unique();
            $table->string('user')->nullable();
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
        Schema::dropIfExists('rackinfos');
    }
}
