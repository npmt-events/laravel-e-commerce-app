<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price')->default(0);
            $table->integer('stock')->default(0);
            $table->longText('colors')->nullable();
            $table->longText('desc')->nullable();
            $table->text('thumb')->nullable();
            $table->longText('photos')->nullable();
            $table->string('brand')->nullable();
            $table->integer('sale')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('sub_category_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
