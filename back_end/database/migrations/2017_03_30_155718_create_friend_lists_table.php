<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('own_id')->unsigned();
            $table->integer('friend_id')->unsigned();
            $table->timestamps();

            $table->unique(array('own_id', 'friend_id'));

            $table->foreign('own_id')
                  ->references('id')->on('users')
                  ->onDelete('CASCADE');
            $table->foreign('friend_id')
                  ->references('id')->on('users')
                  ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friend_lists');
    }
}
