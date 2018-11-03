<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBATDONGSANTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BATDONGSAN', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_kh')->unsigned();
            $table->integer('id_loaibds')->unsigned();
            $table->integer('id_tp')->unsigned(); //Chỗ này k biết nối đúng hong, đang sn nối dô tp hay nối dô phương xã

            $table->string('ten_bds');
            $table->string('alias');
            $table->text('hinhanh')->nullable();
            $table->string('diachi_bds');
            $table->string('chusohuu');
            $table->string('soCNQSDD');
            $table->text('ghichu')->nullable();

            $table->timestamps();

            $table->foreign('id_kh')->references('id')->on('KHACHHANG')->onDelete('restrict');
            $table->foreign('id_loaibds')->references('id')->on('LOAIBDS')->onDelete('restrict');
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
        Schema::dropIfExists('BATDONGSAN');
    }
}
