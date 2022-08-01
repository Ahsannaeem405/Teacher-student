<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->nullable();
            $table->string('email', 100)->unique();
            $table->tinyInteger('role');
            $table->tinyInteger('status');
            $table->string('image')->nullable();
            $table->text('bio')->nullable();
            $table->integer('balance')->nullable();
            $table->string('paypal_email', 100)->nullable();
            $table->string('stripe_secret_key')->nullable();
            $table->string('stripe_public_key')->nullable();
            $table->string('subscription_expiry_date', 15)->nullable();
            $table->integer('remaining_vids')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
