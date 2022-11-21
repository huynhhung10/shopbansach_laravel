<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductTable extends Migration
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
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('product_name');
            $table->string('product_content');
            $table->double('product_price');
            $table->string('product_author');
            $table->string('product_img');
            $table->integer('product_quantity');
            $table->boolean('product_featured');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('brand_id')->references('brand_id')->on('tbl_brand')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('tbl_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            //
        });
    }
};
