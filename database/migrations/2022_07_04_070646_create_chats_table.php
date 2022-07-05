<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('to_id');
            $table->foreign('to_id')
                ->references('id')->on('users')->onDelete('cascade');
//            $table->integer('to_id')->nullable();
            $table->unsignedBigInteger('from_id');
            $table->foreign('from_id')
                ->references('id')->on('users')->onDelete('cascade');
//            $table->integer('from_id')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('chats');
    }
}
