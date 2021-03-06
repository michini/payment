<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('out',2);
            $table->string('bt_integra',9);
            $table->string('bt_cuenta',9);
            $table->string('number_operation',16);
            $table->string('idecli',13);
            $table->string('dirpart');
            $table->string('urbpart');
            $table->string('provpart');
            $table->string('dptopart');
            $table->string('telfpart');
            $table->string('product');
            $table->string('lw05prod');
            $table->char('money',1);
            $table->double('capital');
            $table->double('deuda_ven');
            $table->double('deu_ven_us');
            $table->double('deuda_total');
            $table->integer('dias_mora');
            $table->smallInteger('codfun');
            $table->char('nomfun');
            $table->char('citi',2);
            $table->smallInteger('cuoini');
            $table->smallInteger('cuopag');
            $table->smallInteger('cuoven');
            $table->string('campaign');
            $table->char('base');

            $table->integer('agency_id')->unsigned();
            $table->integer('business_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('purse_id')->unsigned();

            $table->foreign('agency_id')
                    ->references('id')
                    ->on('agencies')
                    ->onDelete('cascade');

            $table->foreign('business_id')
                ->references('id')
                ->on('business')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('purse_id')
                ->references('id')
                ->on('purses')
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
        Schema::dropIfExists('operations');
    }
}
