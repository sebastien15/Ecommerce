<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name')->nullable();
            $table->string('item_code')->nullable();
            $table->string('detail')->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('subcat_id')->nullable()->unsigned();
            $table->integer('price')->nullable();
            $table->integer('currency_id')->nullable()->unsigned();
            $table->integer('brand_id')->nullable()->unsigned();
            $table->integer('shop_id')->nullable()->unsigned();
            $table->integer('shipping_id')->nullable();
            $table->string('active')->default("product unvailable");
            $table->string('condition')->nullable();
            $table->binary('image')->nullable();
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
        Schema::dropIfExists('items');
    }
}
