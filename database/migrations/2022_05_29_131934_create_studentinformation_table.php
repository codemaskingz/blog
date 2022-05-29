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
            $table->string('stateoforigin');
            $table->string('date of birth');
            $table->integer('age');
            $table->string('facultyname');
            $table->string('department');
            $table->integer('payrollnumber');
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
