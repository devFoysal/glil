<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banner');
            $table->string('banner_title_en');
            $table->string('banner_title_bn')->nullable();
            $table->string('banner_subtitle_en');
            $table->string('banner_subtitle_bn')->nullable();
            $table->string('title_en');
            $table->string('title_bn')->nullable();
            $table->text('description_en');
            $table->text('description_bn')->nullable();
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
        Schema::dropIfExists('retails');
    }
}