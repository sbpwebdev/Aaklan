<?php
// database/migrations/xxxx_xx_xx_create_Students_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->id('student_id');  // Primary key with custom name
            $table->string('student_name', 250);
            $table->string('student_email', 250);
            $table->string('student_contact', 250);
            $table->string('student_address',255);
           
            $table->string('organization_code', 30)->default(null);
          
            $table->string('student_images', 255);
            $table->integer('student_type_id');
            $table->integer('student_grade_id');
            $table->integer('student_course_id');
            $table->dateTime('created_on');
            $table->integer('created_by');
            $table->dateTime('modified_on');
            $table->integer('modified_by');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_delete')->default(false);
            $table->timestamps();  // Laravel's default created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('Student');
    }
}
