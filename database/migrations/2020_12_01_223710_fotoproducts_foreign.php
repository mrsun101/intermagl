<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FotoproductsForeign extends Migration
{
    public function up()
    {
        Schema::table('fotoproducts', function (Blueprint $table) {
        $table->foreign('products')->references('id')->on('products');
        $table->foreign('colorproduct')->references('id')->on('colors');
        });
    }

    public function down()
    {
        Schema::table('fotoproducts', function (Blueprint $table) {
        $table->dropForeign('fotoproducts_products_foreign');
        $table->dropForeign('fotoproducts_colorproduct_foreign');
        });
    }
}
