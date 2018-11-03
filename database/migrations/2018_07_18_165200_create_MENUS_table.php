<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMENUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MENUS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_name');
            $table->string('alias');
            $table->string('type');
            $table->text('attribs');
            $table->integer('parent')->unsigned()->default(0);
            $table->integer('sort')->unsigned()->default(0);
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
        Schema::dropIfExists('MENUS');
    }
}
