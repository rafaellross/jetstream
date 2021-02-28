<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('UIDGuid', 40)->nullable();
            $table->string('LastName', 50)->nullable();
            $table->string('FirstName', 50)->nullable();
            $table->string('DisplayID', 50)->nullable();
            $table->boolean('IsActive')->default();
            $table->string('Street')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('PostCode')->nullable();
            $table->string('Country')->nullable();
            $table->string('Phone1')->nullable();
            $table->string('Phone2')->nullable();
            $table->string('Phone3')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Email')->nullable();
            $table->string('ContactName')->nullable();
            
            $table->datetime('LastModified')->nullable();
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
