<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('biodata_male_id')->nullable();
            $table->unsignedInteger('biodata_female_id')->nullable();
            $table->string('day');
            $table->dateTime('date');
            $table->time('time');
            $table->string('dowry');
            $table->boolean('debt')->default('0');
            $table->string('place');
            $table->boolean('final')->default('0');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('biodata_male_id')->references('id')->on('biodata_males');
            $table->foreign('biodata_female_id')->references('id')->on('biodata_females');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
