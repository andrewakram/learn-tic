<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_inquiries', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['normal','urgent'])->default('normal');
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('date')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();

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
        Schema::dropIfExists('student_inquiries');
    }
}
