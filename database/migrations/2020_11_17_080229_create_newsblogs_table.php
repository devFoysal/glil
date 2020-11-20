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
            $table->string('title_en')->nullable(true);
            $table->string('title_bn')->nullable(true);
            $table->text('short_description_en')->nullable(true);
            $table->text('short_description_bn')->nullable(true);
            $table->text('description_en')->nullable(true);
            $table->text('description_bn')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('cover_image')->nullable(true);
            $table->string('slug_en')->nullable(true);
            $table->string('slug_bn')->nullable(true);
            $table->bigInteger('views')->default(1);
            $table->boolean('status')->default(true);
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
