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
            $table->string('name');
            $table->string('sid');
            $table->string('gender');
            $table->string('birth');
            $table->double('class');
            $table->string('join');
            $table->double('mobile');
            $table->double('admission_number');
            $table->string('section');
            $table->string('email');
            $table->string('father_name');
            $table->double('father_mobile');
            $table->string('mother_name');
            $table->double('mother_mobile');
            $table->string('address');
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
