<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_layout', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_srl', 12);
            $table->integer('s_no', 10);
            $table->string('title', 250);
            $table->integer('list_order', 11);
            $table->string('regdate', 14);
            
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
        Schema::dropIfExists('menu_layout');
    }
}
