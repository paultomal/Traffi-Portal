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
        Schema::create('e_chalans', function (Blueprint $table) {
            $table->id('echalan_id');
            $table->bigInteger('employe_id');
            $table->string("name");
            $table->string("trasport");
            $table->string("vehicle_no");
            $table->string("crime");
            $table->string("fee");
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
        Schema::dropIfExists('e_chalans');
    }
};
