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
        Schema::create('studentinformation', function (Blueprint $table) {
            $table->id();
            $table->string('StateOfOrigin');
            $table->string('DateOfBirth');
            $table->string('Email');
            $table->integer('Age');
            $table->string('FacultyName');
            $table->string('Department');
            $table->integer('PayrollNumber');
            $table->integer('TotalAmountPaid');
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
        Schema::dropIfExists('studentinformation');
    }
};
