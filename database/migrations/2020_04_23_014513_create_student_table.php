<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_number');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('address');
            $table->string('contact_number');
            $table->string('section_name');
            $table->string('grade_level');
            $table->string('mothername');
            $table->string('mother_occupation'); 
            $table->string('mother_cnumber');
            $table->string('fathername');
            $table->string('father_occupation');
            $table->string('father_cnumber');
            $table->string('image')->nullable();
             $table->unsignedInteger('active')->default(1);
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
