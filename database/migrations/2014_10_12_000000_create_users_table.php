<?php

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
            $table->increments('id');
            $table->string('dni',9)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('type_home');
            $table->string('number_phone_home')->nullable();
            $table->string('number_phone_familiar')->nullable();
            $table->string('number_phone_neighbour')->nullable();
            $table->string('number_phone_personal')->nullable();
            $table->string('password');

            $table->string('new_address')->nullable();
            $table->string('new_type_home')->nullable();
            $table->string('new_number_phone_home')->nullable();
            $table->string('new_number_phone_familiar')->nullable();
            $table->string('new_number_phone_neighbour')->nullable();
            $table->string('new_number_phone_personal')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
