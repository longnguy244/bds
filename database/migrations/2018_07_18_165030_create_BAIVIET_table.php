<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBAIVIETTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BAIVIET', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_bds')->unsigned();

            $table->string('ten_bv');
            $table->text('hinhanh')->nullable();
            $table->string('alias');
            $table->string('noidung')->nullable();
            $table->string('trangthai');
            $table->integer('view')->nullable();
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
        Schema::dropIfExists('BAIVIET');
    }
}
