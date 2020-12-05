<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriesForeign extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
        $table->foreign('section')->references('id')->on('sections');
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
        $table->dropForeign('categories_section_foreign');
        });
    }
}
