<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddonsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addons_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addons_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('addons_id')
            ->references('id')
            ->on('addons')
            ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addons_category');
    }
}
