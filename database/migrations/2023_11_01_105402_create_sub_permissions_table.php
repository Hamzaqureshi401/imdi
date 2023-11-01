<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubPermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('sub_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permission_id');
            $table->string('name');
            $table->timestamps();

            // Define a foreign key constraint
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_permissions');
    }
}
