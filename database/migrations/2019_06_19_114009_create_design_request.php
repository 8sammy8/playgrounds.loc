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
            $table->string('quote');
            $table->string('job_name');
            $table->string('job_location');
            $table->integer('request_type');
            $table->string('structure_name')->nullable();
            $table->string('sku')->nullable();
            $table->string('model')->nullable();

            $table->integer('priority');
            $table->timestamp('complete_at')->nullable();
            $table->integer('status');
            $table->text('notes')->nullable();

            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('color_scheme_id')->unsigned()->index();
            $table->bigInteger('responsible_id')->nullable()->unsigned()->index();
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
