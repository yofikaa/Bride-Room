<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataFemalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_females', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('father_biodata_of_parents_id')->nullable();
            $table->unsignedInteger('mother_biodata_of_parents_id')->nullable();
            $table->unsignedInteger('ex_id')->nullable();
            $table->string('letter')->nullable();
            $table->string('village')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('full_name')->nullable();
            $table->string('name')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->string('citizen')->nullable();
            $table->string('religion')->nullable();
            $table->string('profession' )->nullable();
            $table->string('residence')->nullable();
            $table->string('bin_binti')->nullable();
            $table->string('status')->nullable();
            $table->string('ex_spouse')->nullable();
            $table->timestamps();

            $table->foreign('father_biodata_of_parents_id')->references('id')->on('biodata_of_parents')->onDelete('cascade');
            $table->foreign('mother_biodata_of_parents_id')->references('id')->on('biodata_of_parents')->onDelete('cascade');
            $table->foreign('ex_id')->references('id')->on('biodata_of_exes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_females');
    }
}
