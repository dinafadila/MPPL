<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->date('date_of_entry');
            $table->mediumText('address');
            $table->string('phone');
            $table->string('father_name');
            $table->string('mother_name');
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
        Schema::dropIfExists('students');
    }
}
