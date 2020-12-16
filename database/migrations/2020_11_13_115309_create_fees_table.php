<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->enum('month', [
                'Januari', 'Februari', 'Maret',
                'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ]);
            $table->date('date_of_payment');
            $table->integer('school_fee')->nullable();
            $table->integer('entrance_fee')->nullable();
            $table->enum('status', ['Lunas', 'Belum Lunas']);
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
        Schema::dropIfExists('fees');
    }
}
