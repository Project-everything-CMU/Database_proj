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
            $table->integer('product_code')->unique();
            $table->text('product_name');
            $table->text('product_line')->nullable();
            $table->text('product_scale')->nullable();
            $table->text('product_vendor')->nullable();
            $table->text('product_description')->nullable();
            $table->integer('quantity_instock');
            $table->integer('buy_price');
            $table->integer('MSRP');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
