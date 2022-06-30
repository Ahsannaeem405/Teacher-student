<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_image')->nullable();
            $table->string('course_name', 30);
            $table->string('course_date', 15);
            $table->string('course_time', 15);
            $table->text('course_doc')->nullable();
            $table->unsignedBigInteger('create_class_id');
            $table->foreign('create_class_id')
                ->references('id')->on('create_classes')->onDelete('cascade');
//            $table->string('class_name', 10);
            $table->text('course_description')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('create_courses');
    }
}
