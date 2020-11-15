<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('group');
            $table->integer('semester');
            $table->string('school_year');
            $table->longText('religion_and_moral');
            $table->longText('social_emotional_and_autonomy');
            $table->longText('language');
            $table->longText('cognitive');
            $table->longText('physical');
            $table->longText('art');
            $table->string('extracurricular');
            $table->enum('grade_of_extracurricular', ['A', 'B', 'C', 'K']);
            $table->longText('description');
            $table->integer('sick');
            $table->integer('permit');
            $table->integer('absent');
            $table->longText('note_for_parents');
            $table->date('date_of_report');
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
        Schema::dropIfExists('reports');
    }
}
