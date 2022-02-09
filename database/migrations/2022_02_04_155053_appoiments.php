<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appoiments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoiments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_schedule_id');
            $table->string('appoiment_number');
            $table->Time('appoiment_time');
            $table->foreign('doctor_id')
                ->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('patient_id')
                ->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('doctor_schedule_id')
                ->references('id')->on('doctors_schedule')->onDelete('cascade');
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
        //
    }
}
