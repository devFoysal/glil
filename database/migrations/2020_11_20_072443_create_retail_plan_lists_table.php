<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailPlanListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_plan_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plan_id');
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('image');
            $table->string('banner');
            $table->string('banner_title_en');
            $table->string('banner_title_bn')->nullable();
            $table->longText('introduction_en');
            $table->longText('introduction_bn');
            $table->longText('feature_en');
            $table->longText('feature_bn')->nullable();
            $table->longText('term_en')->nullable();
            $table->longText('term_bn')->nullable();
            $table->string('video_url')->nullable();
            $table->foreign('plan_id')->references('id')->on('retail_plans')->onDelete('cascade');
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
        Schema::dropIfExists('retail_plan_lists');
    }
}