<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancassurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backassurances', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable(true);
            $table->string('title_bn')->nullable(true);
            $table->string('subtitle_en')->nullable(true);
            $table->string('subtitle_bn')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('keybenefit1_en')->nullable(true);
            $table->string('keybenefit1_bn')->nullable(true);
            $table->string('keybenefit2_en')->nullable(true);
            $table->string('keybenefit2_bn')->nullable(true);
            $table->string('keybenefit3_en')->nullable(true);
            $table->string('keybenefit3_bn')->nullable(true);
            $table->string('keybenefit4_en')->nullable(true);
            $table->string('keybenefit4_bn')->nullable(true);
            $table->text('introduction_en')->nullable(true);
            $table->text('introduction_bn')->nullable(true);
            $table->text('whygurdian_en')->nullable(true);
            $table->text('whygurdian_bn')->nullable(true);
            $table->text('benefitsforbankcustomers_en')->nullable(true);
            $table->text('benefitsforbankcustomers_bn')->nullable(true);
            $table->text('benefitsforbank_en')->nullable(true);
            $table->text('benefitsforbank_bn')->nullable(true);
            $table->text('creditriskmigrationproducts_en')->nullable(true);
            $table->text('creditriskmigrationproducts_bn')->nullable(true);
            $table->text('depositoryinsuranceproducts_en')->nullable(true);
            $table->text('depositoryinsuranceproducts_bn')->nullable(true);
            $table->text('benefitsweareoffering_en')->nullable(true);
            $table->text('benefitsweareoffering_bn')->nullable(true);
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
        Schema::dropIfExists('backassurances');
    }
}
