<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create2HoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nv')->unsigned();
            $table->integer('id_hd')->unsigned();
            $table->string('lydothu');
            $table->string('tongtien');
            $table->date('ngaythu');
            $table->text('ghichu')->nullable();
            $table->timestamps();

            $table->foreign('id_nv')->references('id')->on('NHANVIEN')->onDelete('restrict');
            $table->foreign('id_hd')->references('id')->on('HOPDONG')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
