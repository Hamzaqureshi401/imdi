<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('is_active');
            $table->string('role')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert some stuff
    DB::table('users')->insert(
        array(
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
           'is_active'=>'1',
           'role' => '1',
            'password' => Hash::make('12345678')
        )
    );
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
