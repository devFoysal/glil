<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateaccordionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporateaccordions', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable(true);
            $table->string('title_bn')->nullable(true);
            $table->text('description_en')->nullable(true);
            $table->text('description_bn')->nullable(true);
            $table->string('page_link')->nullable(true);
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
        Schema::dropIfExists('corporateaccordions');
    }
}
