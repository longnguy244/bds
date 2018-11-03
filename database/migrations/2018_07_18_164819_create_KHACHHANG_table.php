<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKHACHHANGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KHACHHANG', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('ten_kh');
            $table->date('ngaysinh_kh')->nullable();
            $table->string('diachi_kh');
            $table->string('phone_kh');
            $table->string('email_kh')->nullable();
            $table->string('hokhau');
            $table->string('cmnd_kh');
            $table->date('ngaycap_kh');
            $table->text('ghichu')->nullable();

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
        Schema::dropIfExists('KHACHHANG');
    }
}
