<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_teams', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(true);
            $table->string('name_en')->nullable(true);
            $table->string('name_bn')->nullable(true);
            $table->string('designation_en')->nullable(true);
            $table->string('designation_bn')->nullable(true);
            $table->tinyInteger('orders')->default(0);
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
        Schema::dropIfExists('management_teams');
    }
}
