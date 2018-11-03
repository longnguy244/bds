<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBIENBANTHANHLYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BIENBANTHANHLY', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_hd')->unsigned();

            $table->string('lydothanhly'); // đã bán đc bds, hợp đồng hết hạn
            $table->date('ngaylapbb');
            $table->text('ghichu')->nullable();

            $table->timestamps();

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
        Schema::dropIfExists('BIENBANTHANHLY');
    }
}
