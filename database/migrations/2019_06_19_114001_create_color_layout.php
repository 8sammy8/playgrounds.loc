<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorLayout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_layouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('number');
            $table->bigInteger('color_scheme_id')->unsigned()->index();
            $table->bigInteger('color_id')->unsigned()->index();

            $table->foreign('color_scheme_id')
                ->references('id')
                ->on('color_schemes');

            $table->foreign('color_id')
                ->references('id')
                ->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_layouts');
    }
}
