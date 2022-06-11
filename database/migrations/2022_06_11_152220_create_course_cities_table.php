<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoey_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');

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
        Schema::dropIfExists('course_cities');
    }
}
