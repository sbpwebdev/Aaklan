<?php
// database/migrations/xxxx_xx_xx_create_organizations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    public function up()
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->id('organization_id');  // Primary key with custom name
            $table->string('organization_name', 250);
            $table->string('organization_email', 250);
            $table->string('organization_contact', 250);
            $table->text('organization_address');
            $table->string('organization_city', 100);
            $table->string('organization_state', 100);
            $table->string('referance_code', 20);
            $table->integer('no_of_trainers');
            $table->string('password', 150);
            $table->string('organization_images', 25);
            $table->integer('organization_type_id');
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
        Schema::dropIfExists('organization');
    }
}
