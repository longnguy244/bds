<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePHUONGXATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PHUONGXA', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_quan')->unsigned();

            $table->string('ten_phuong');
            $table->text('ghichu')->nullable();

            $table->timestamps();

            $table->foreign('id_quan')->references('id')->on('QUANHUYEN')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PHUONGXA');
    }
}
