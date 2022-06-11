<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->string('price_before')->nullable();
            $table->string('price_after')->nullable();
            $table->bigInteger('points')->nullable();
            $table->integer('status')->nullable();
            $table->integer('payment_status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
