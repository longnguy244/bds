<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMOTABDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MOTABDS', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_bds')->unsigned();

            $table->string('dientich');
            $table->string('chieudai');
            $table->string('chieurong');
            $table->string('dientichxd');
            $table->string('dientichsd');
            $table->int('phongngu')->nullable();
            $table->int('phongtam')->nullable();
            $table->string('cautruc')->nullable();
            $table->string('tiennghi')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamps();

            $table->foreign('id_bds')->references('id')->on('BATDONGSAN')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MOTABDS');
    }
}
