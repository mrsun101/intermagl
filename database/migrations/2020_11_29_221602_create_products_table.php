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
$table->string('fullname');
$table->foreignId('brend')->index();
$table->tinyInteger('isnew'); 
            $table->foreignId('category')->index();
            $table->tinyInteger('issize'); 
            $table->decimal('price',15,2); 
             $table->decimal('discount',5,2); 
              $table->tinyInteger('iscolor'); 
              $table->tinyInteger('isbest'); 
            $table->string('uniquecode');
            $table->string('smalldiscription');
            $table->binary('discription');
            $table->tinyInteger('status'); 
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
