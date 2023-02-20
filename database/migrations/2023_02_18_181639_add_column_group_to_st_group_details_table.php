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
        Schema::table('st_group_details', function (Blueprint $table) {
            $table->string('semister')->nullable()->after('student_id');
            $table->string('session')->nullable()->after('semister');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('st_group_details', function (Blueprint $table) {
            //
        });
    }
};
