<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_id')->unsigned();
            $table->integer('target_id')->unsigned();
            $table->string('message');
            $table->boolean('visible_to_owner')->default(true);
            $table->boolean('visible_to_target')->default(true);
            $table->timestamps();

            $table->foreign('source_id')
                  ->references('id')->on('users')
                  ->onDelete('CASCADE');
            $table->foreign('target_id')
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
        Schema::dropIfExists('messages');
    }
}
