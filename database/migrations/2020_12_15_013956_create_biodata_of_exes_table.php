<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataOfExesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_of_exes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')-> nullable();
            $table->string('name')-> nullable();
            $table->string('place_of_birth')-> nullable();
            $table->dateTime('date_of_birth')-> nullable();
            $table->string('citizen')-> nullable();
            $table->string('religion')-> nullable();
            $table->string('profession')-> nullable();
            $table->string('residence')-> nullable();
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
        Schema::dropIfExists('biodata_of_exes');
    }
}
