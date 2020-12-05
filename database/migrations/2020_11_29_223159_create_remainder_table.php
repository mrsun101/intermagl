<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemainderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remainder', function (Blueprint $table) {
         $table->id();
$table->foreignId('colorproduct')->index();
$table->foreignId('productsize')->index();;
$table->integer('value');
$table->foreignId('product')->index();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remainder');
    }
}
