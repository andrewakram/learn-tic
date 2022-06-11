<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_exam_id')->references('id')->on('user_exams')->onDelete('cascade');
            $table->foreignId('exam_id')->nullable()->references('id')->on('exams')->onDelete('cascade');

            $table->string('mark')->nullable();
            $table->text('question_title_ar')->nullable();
            $table->text('question_title_en')->nullable();
            $table->text('answer_title_ar')->nullable();
            $table->text('answer_title_en')->nullable();
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
        Schema::dropIfExists('user_questions');
    }
}
