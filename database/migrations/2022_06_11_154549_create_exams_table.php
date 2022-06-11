<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('course_id')->nullable()->references('id')->on('courses')->onDelete('cascade');
            $table->string('total')->nullable();
            $table->bigInteger('no_of_questions')->nullable();
            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();

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
        Schema::dropIfExists('exams');
    }
}
