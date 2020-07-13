<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->uuid('uuid');
            $table->unsignedInteger('fk_category');
            $table->unsignedInteger('fk_status');
            $table->string('codigo_producto');
            $table->string('name');
            $table->text('description');
            $table->integer('stock');
            $table->float('price');
            $table->timestamps();
        });

         Schema::table('products', function($table) {
            $table->foreign('fk_category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('fk_status')->references('id')->on('statuses')->onDelete('cascade');
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
