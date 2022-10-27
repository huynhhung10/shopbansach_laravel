<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('product_name');
            $table->string('product_content');
            $table->double('product_price');
            $table->string('product_author');
            $table->string('product_img');
            $table->string('product_quantity');
            $table->boolean('status');
            //$table->boolean('product_featured');
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
        Schema::dropIfExists('tbl_product');
    }
};
