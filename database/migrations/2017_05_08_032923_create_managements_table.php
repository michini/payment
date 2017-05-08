<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->mediumText('comment');
            $table->string('url_photo');
            $table->boolean('approved_status');

            $table->integer('reason_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('reason_id')
                    ->references('id')
                    ->on('role_user')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('user_id')
                    ->on('role_user')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('managements');
    }
}
