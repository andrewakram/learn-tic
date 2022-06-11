<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('course_id')->nullable()->references('id')->on('courses')->onDelete('cascade');
            $table->string('user_marks')->nullable();
            $table->string('exam_marks')->nullable();
            $table->text('exam_title_ar')->nullable();
            $table->text('exam_title_en')->nullable();
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
        Schema::dropIfExists('user_exams');
    }
}
