<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastercasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastercases', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('length')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('weight')->nullable();
            $table->string('hi')->nullable();
            $table->string('ti')->nullable();
            $table->string('upc')->unique();
            $table->string('status')->nullable();
            $table->string('alert_quantity')->nullable();
            $table->string('user');      
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
        Schema::dropIfExists('mastercases');
    }
}
