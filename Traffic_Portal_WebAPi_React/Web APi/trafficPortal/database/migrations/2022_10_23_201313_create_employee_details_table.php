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
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id('emplyee_id');
            $table->string('employe_name');
            $table->date('dob');
            $table->bigInteger('sallary');
            $table->string('rank');
            $table->string('appoinment');
            $table->string("status");
            $table->date('joining_date');
            $table->bigInteger('tp_id');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('employee_details');
    }
};
