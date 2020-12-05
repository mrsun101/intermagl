<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrendsForeign extends Migration
{
    public function up()
    {
        Schema::table('brends', function (Blueprint $table) {
        $table->foreign('section')->references('id')->on('sections');
        });
    }

    public function down()
    {
        Schema::table('brends', function (Blueprint $table) {
        $table->dropForeign('brends_section_foreign');
        });
    }
}
