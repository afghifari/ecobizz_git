<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('forum_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->boolean('is_pinned')->default(false);
            $table->timestamps();
            $table->datetime('last_update')->default(Carbon::now());

            $table->foreign('forum_id')
                  ->references('id')->on('forums')
                  ->onDelete('CASCADE');
            $table->foreign('owner_id')
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
        Schema::dropIfExists('threads');
    }
}
