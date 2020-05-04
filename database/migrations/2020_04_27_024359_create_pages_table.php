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
            $table->bigInteger('categories_id', false, true);
            $table->string('title', 150);
            $table->string('small_text', 250);
            $table->text('text', 65535);
            $table->string('img', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
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
