<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatbtusers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('reciver_id')->nullable();
            $table->foreign('reciver_id')->references('id')->on('users');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->unsignedBigInteger('last_messenger_id')->nullable();
            $table->foreign('last_messenger_id')->references('id')->on('users');
            $table->unsignedBigInteger('last_message_id')->nullable();
            $table->foreign('last_message_id')->references('id')->on('chat_histories');
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
        Schema::dropIfExists('chatbtusers');
    }
};
