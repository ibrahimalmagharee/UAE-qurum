<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_goals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ar');
            $table->string('title_en');
            $table->text('description1_ar');
            $table->text('description1_en');
            $table->text('description2_ar');
            $table->text('description2_en');
            $table->text('description3_ar');
            $table->text('description3_en');
            $table->text('description4_ar');
            $table->text('description4_en');
            $table->text('description5_ar');
            $table->text('description5_en');
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
        Schema::dropIfExists('program_goals');
    }
}
