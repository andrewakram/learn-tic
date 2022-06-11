<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('file')->nullable();
            $table->enum('type',
                ['graduate','certificate','image','national_id','residence_id','other'])
                ->default('other');
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
        Schema::dropIfExists('teacher_uploads');
    }
}
