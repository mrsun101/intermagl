<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsizeForeign extends Migration
{
    public function up()
    {
        Schema::table('productsize', function (Blueprint $table) {
        $table->foreign('product')->references('id')->on('products');
        $table->foreign('size')->references('id')->on('sizes');
        });
    }

    public function down()
    {
        Schema::table('productsize', function (Blueprint $table) {
        $table->dropForeign('productsize_product_foreign');
        $table->dropForeign('productsize_size_foreign');
        });
    }
}
