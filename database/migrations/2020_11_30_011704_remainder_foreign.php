<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemainderForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remainder', function (Blueprint $table) {
                 $table->foreign('colorproduct')->references('id')->on('colorproducts');
            $table->foreign('productsize')->references('id')->on('productsize');
             $table->foreign('product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remainder', function (Blueprint $table) {
             $table->dropForeign('remainder_colorproduct_foreign');
           $table->dropForeign('remainder_productsize_foreign');
                $table->dropForeign('remainder_product_foreign');
        });
    }
}
