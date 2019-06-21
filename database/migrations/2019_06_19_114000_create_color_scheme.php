<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorScheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_schemes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('img')->nullable();

            $table->string('posts_clamps');
            $table->string('metal_rails');
            $table->string('roofs');
            $table->string('slides');
            $table->string('plastic_climbers');
            $table->string('panels');
            $table->string('panel_accents');
            $table->string('accessories');
            $table->string('bridges');

            $table->bigInteger('default')->nullable()->unsigned()->index();
            $table->foreign('default')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_schemes');
    }
}
