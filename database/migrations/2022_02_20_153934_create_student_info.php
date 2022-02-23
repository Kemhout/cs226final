<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_info', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->bigIncrements('student_card');
            $table->foreign('student_card')->references('id_card')->on('student')->onUpdate('cascade')->onDelete('cascade');
            $table->string("parent_name");
            $table->string("parent_phone");
            $table->integer("scholarship");
            $table->date("enroll_date");
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
        Schema::dropIfExists('student_info');
    }
} 
