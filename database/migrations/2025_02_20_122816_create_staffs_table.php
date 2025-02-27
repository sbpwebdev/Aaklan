<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\schema\Blueprint;
use Illuminate\support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('Staff', function (Blueprint $table) {
            $table->id('staff_id');  // Primary key with custom name
            $table->string('staff_name', 250);
            $table->string('staff_email', 250);
            $table->string('staff_contact', 250);
            $table->string('qualification', 255);
            $table->string('staff_organization_id', 150);
            // $table->string('staff_images', 255); // Uncomment if required
            $table->integer('staff_type_id');
            $table->integer('staff_course_id');
            $table->string('staff_city', 255);  // Assuming it's a city name or code
            $table->string('staff_skills', 255);
            $table->boolean('IsEmployee');
            $table->timestamps();  // Laravel's default created_at and updated_at
            $table->boolean('is_active')->default(true); // Default to true
            $table->boolean('is_delete')->default(false); // Default to false
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
