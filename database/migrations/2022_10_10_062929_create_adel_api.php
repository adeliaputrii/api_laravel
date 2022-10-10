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
        Schema::create('adel_api', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('fullname');
            $table->string('subdivisi');
            $table->string('date_visit');
            $table->string('location');
            $table->text('description');
            $table->string('target');
            $table->integer('stk_numbers');
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
        Schema::dropIfExists('adel_api');
    }
};
