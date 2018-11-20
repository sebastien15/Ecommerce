<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('shop_name');
            $table->string('shop_owner');
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->integer('stockItems_count')->nullable();
            $table->integer('location_id')->nullable()->unsigned();
            $table->integer('sold_count')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
