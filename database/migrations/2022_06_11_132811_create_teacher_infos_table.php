<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoey_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('national_id')->nullable();
            $table->string('residence_id')->nullable();
            $table->enum('qualifications', ['PHD', 'Master','Bachlore','other'])->default('other');
            $table->string('university')->nullable();
            $table->enum('learn_type', ['remote', 'site'])->default('remote');
            $table->integer('years_of_exper')->nullable();
            $table->text('desctiption')->nullable();
            $table->bigInteger('inquiry_cost_normal')->default(1);
            $table->bigInteger('inquiry_cost_urgent')->default('2');
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
        Schema::dropIfExists('teacher_infos');
    }
}
