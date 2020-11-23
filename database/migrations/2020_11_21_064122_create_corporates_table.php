<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporates', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable(true);
            $table->string('title_bn')->nullable(true);
            $table->string('subtitle_en')->nullable(true);
            $table->string('subtitle_bn')->nullable(true);
            $table->string('image')->nullable(true);
            $table->text('intoduction_en')->nullable(true);
            $table->text('intoduction_bn')->nullable(true);
            $table->text('whyguardian_en')->nullable(true);
            $table->text('whyguardian_bn')->nullable(true);
            $table->text('benefit_en')->nullable(true);
            $table->text('benefit_bn')->nullable(true);
            $table->text('grouptermlife_en')->nullable(true);
            $table->text('grouptermlife_bn')->nullable(true);
            $table->text('illnessbenefits_en')->nullable(true);
            $table->text('illnessbenefits_bn')->nullable(true);
            $table->text('medicalinsuranceplan_en')->nullable(true);
            $table->text('medicalinsuranceplan_bn')->nullable(true);
            $table->text('accidentbenefits_en')->nullable(true);
            $table->text('accidentbenefits_bn')->nullable(true);
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
        Schema::dropIfExists('corporates');
    }
}
