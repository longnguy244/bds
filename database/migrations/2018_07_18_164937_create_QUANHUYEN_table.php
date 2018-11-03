<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQUANHUYENTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUANHUYEN', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_tp')->unsigned();

            $table->string('ten_quan');
            $table->text('ghichu')->nullable();

            $table->timestamps();

            $table->foreign('id_tp')->references('id')->on('THANHPHO')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QUANHUYEN');
    }
}
