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
        Schema::create('allocation_details', function (Blueprint $table) {
            $table->id();
            $table->integer('allocation_id');
            $table->string('student_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('cgpa');
 
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
        Schema::dropIfExists('allocation_details');
    }
};
