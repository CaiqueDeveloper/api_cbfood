<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement_company', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('announcement_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->timestamps();

            $table->foreign('announcement_id')
            ->references('id')
            ->on('announcements')
            ->onDelete('cascade');


            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
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
        Schema::dropIfExists('announcement_company');
    }
}
