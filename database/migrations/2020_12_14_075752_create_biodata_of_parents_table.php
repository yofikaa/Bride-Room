<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataOfParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_of_parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('citizen');
            $table->string('religion');
            $table->string('profession');
            $table->string('residence');
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
        Schema::dropIfExists('biodata_of_parents');
    }
}
