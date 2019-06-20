<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('input_quote');
            $table->integer('request_type');
            $table->string('structure_name')->nullable();
            $table->string('sku')->nullable();
            $table->string('model')->nullable();
            $table->string('posts_clamps');
            $table->string('metal_rails');
            $table->string('slides');
            $table->string('plastic_climbers');
            $table->string('panels');
            $table->string('panel_accents');
            $table->string('accessories');
            $table->string('bridges');

            $table->bigInteger('color_scheme_id')->unsigned()->index();

            $table->bigInteger('responsible_id')->unsigned()->index();
            $table->integer('priority');
            $table->integer('complete_at');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('responsible_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('color_scheme_id')
                ->references('id')
                ->on('color_schemes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_requests');
    }
}
