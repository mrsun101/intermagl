<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ColorproductsForeign extends Migration
{
    public function up()
    {
        Schema::table('colorproducts', function (Blueprint $table) {
        $table->foreign('product')->references('id')->on('products');
        $table->foreign('color')->references('id')->on('colors');
        });
    }

    public function down()
    {
        Schema::table('colorproducts', function (Blueprint $table) {
        $table->dropForeign('colorproducts_product_foreign');
        $table->dropForeign('colorproducts_color_foreign');
        });
    }
}
