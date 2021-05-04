<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('departament_id');
            $table->string("stall");
            $table->string("employee_number");
            $table->string("employee_phone");
            $table->string("salary_min");
            $table->string("salary_max");
            $table->date("date_of_admission");
            $table->string("employee_code");
            $table->json("internal_experience")->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('departament_id')->references('id')->on('departaments');
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
        Schema::dropIfExists('academics');
    }
}
