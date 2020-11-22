<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashlessFacilityFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashless_facility_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('organization');
            $table->string('insured_name');
            $table->integer('pin');
            $table->date('date');
            $table->string('patient_name');
            $table->string('mobile');
            $table->string('email');
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
        Schema::dropIfExists('cashless_facility_forms');
    }
}