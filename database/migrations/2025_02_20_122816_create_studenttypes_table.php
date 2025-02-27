<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\schema\Blueprint;
use Illuminate\support\Facades\Schema;

class CreateStudentTypesTable extends Migration
{
    public function up()
    {
        Schema::create('StudentType', function (Blueprint $table) {
            $table->id('StudentType_id');  // Primary key with custom name
            $table->string('StudentType_name', 250);
    
            $table->timestamps();  // Laravel's default created_at and updated_at
            $table->boolean('is_active')->default(true); // Default to true
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('StudentType');
    }
}
