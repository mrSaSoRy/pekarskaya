<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigInteger('id', true, true);
            $table->unsignedBigInteger('categories_id');
            $table->string('title');
            $table->string('small_text');
            $table->text('text');
            $table->string('img')->nullable();
            $table->string('img_small')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
