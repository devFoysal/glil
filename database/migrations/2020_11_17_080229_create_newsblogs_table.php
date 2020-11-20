<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsblogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('title_en');
            $table->string('title_bn');
            $table->text('description_en');
            $table->text('description_bn');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsblogs');
    }
}
