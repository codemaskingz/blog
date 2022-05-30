<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_employees_information', function (Blueprint $table) {
            $table->id();
            $table->integer('EmplymentId');
            $table->string('CompanyBranch');
            $table->string('RegisterEmail');
            $table->string('Position');
            $table->integer('DateOfEmployment');
            $table->integer('EmploymentNumber');
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
        Schema::dropIfExists('_employees_information');
    }
};
