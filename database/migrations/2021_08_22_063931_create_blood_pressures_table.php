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
        Schema::create('blood_pressures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_4422032')->references('id')->on('users')->onDelete('cascade');
            $table->date('measured_in');
            $table->time('measured_at');
            $table->integer('diastolic_pressure');
            $table->integer('systolic_pressure');
            $table->integer('pulse_pressure');
            $table->string('remark', 100)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_pressures');
    }
};
