<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHOPDONGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HOPDONG', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_bds')->unsigned();
            $table->integer('id_kh')->unsigned();
            $table->integer('id_nv')->unsigned();

            $table->string('ten_hd');
            $table->string('giaban');
            $table->string('giathue');
            $table->string('phi_mg');
            $table->string('phi_dangbai');
            $table->string('huehong');
            $table->string('hinhthucthanhtoan'); //tiền mặt, thẻ tính dụng, chuyển khoản
            $table->string('solanthanhtoan');
            $table->string('thoihanthanhtoan'); //thanh toán trong vòng bao lâu
            $table->date('thoihanhopdong'); // từ ngày - dến ngày
            $table->date('ngaylaphd');
            $table->text('ghichu')->nullable();

            $table->timestamps();

            $table->foreign('id_bds')->references('id')->on('BATDONGSAN')->onDelete('restrict');
            $table->foreign('id_kh')->references('id')->on('KHACHHANG')->onDelete('restrict');
            $table->foreign('id_nv')->references('id')->on('NHANVIEN')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HOPDONG');
    }
}
