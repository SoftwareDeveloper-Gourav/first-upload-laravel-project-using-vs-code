<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_details', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('student_join');
            $table->string('blood_group');
            $table->string('school_name');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('students_details');
    }
}