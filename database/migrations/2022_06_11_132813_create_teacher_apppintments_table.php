<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherApppintmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_apppintments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('from')->nullable();
          //  $table->string('to')->nullable();
            $table->enum('day',
                ['Saturday','Sunday','Monday','Tuesday','Wednsday','Thursday','Friday'])
                ->default('Saturday');
                //$table->date('day')->nullable();

           
           
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
        Schema::dropIfExists('teacher_apppintments');
    }
}
