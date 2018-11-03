<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNHANVIENTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NHANVIEN', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_cvu')->unsigned();

            $table->string('ten_nv');
            $table->date('ngaysinh_nv');
            $table->string('diachi_nv')->nullable();
            $table->string('phone_nv')->nullable();
            $table->string('email_nv');
            $table->string('cmnd_nv');
            $table->date('ngaycap_nv');
            $table->text('ghichu')->nullable();

            $table->timestamps();

            $table->foreign('id_cvu')->references('id')->on('CHUCVU')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NHANVIEN');
    }
}
