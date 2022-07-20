<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name', 10);
            $table->string('teacher_name', 25);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->string('class_title', 100);
            $table->text('class_description')->nullable();
            $table->string('class_date', 15)->nullable();
            $table->string('class_time', 15)->nullable();
//            $table->string('class_duration', 30);
            $table->string('class_image')->nullable();
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
        Schema::dropIfExists('create_classes');
    }
}
