<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_layouts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('menu_srl')->default(0);
            $table->bigInteger('s_no')->default(0);
            $table->string('title', 250);
            $table->bigInteger('list_order')->default(0);
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
        Schema::dropIfExists('menu_layouts');
    }
}
