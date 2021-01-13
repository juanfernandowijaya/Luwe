<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shoplist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoplists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_name');
            $table->string('shop_image');
            $table->string('shop_address');
            $table->string('shop_dayopen');
            $table->string('shop_timeopen');
            $table->string('shop_desc');
            $table->string('shop_contact');
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
        Schema::dropIfExists('shoplists');
    }
}
