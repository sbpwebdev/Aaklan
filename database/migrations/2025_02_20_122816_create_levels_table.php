<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\schema\Blueprint;
use Illuminate\support\Facades\Schema;

class CreateLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('Level', function (Blueprint $table) {
            $table->id('Level_id');  // Primary key with custom name
            $table->string('Level_name', 250);
    
            $table->timestamps();  // Laravel's default created_at and updated_at
            $table->boolean('is_active')->default(true); // Default to true
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('Level');
    }
}
