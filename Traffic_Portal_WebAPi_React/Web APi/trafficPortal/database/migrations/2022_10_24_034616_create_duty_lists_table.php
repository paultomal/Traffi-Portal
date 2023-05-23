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
        Schema::create('duty_lists', function (Blueprint $table) {
            $table->id('d_id');
            $table->date('date');
            $table->string('schedule_name');
            $table->bigInteger('employe_id');
            $table->bigInteger('tp_id');
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
        Schema::dropIfExists('duty_lists');
    }
};
