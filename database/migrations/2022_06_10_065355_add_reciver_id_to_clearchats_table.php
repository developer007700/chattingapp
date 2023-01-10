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
        Schema::table('clear_chats', function (Blueprint $table) {
          $table->unsignedBigInteger('reciver_id')->nullable()->after('group_id');
          $table->foreign('reciver_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clear_chats', function (Blueprint $table) {
            
        });
    }
};
