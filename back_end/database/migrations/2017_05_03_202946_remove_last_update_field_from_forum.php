<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveLastUpdateFieldFromForum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forums', function (Blueprint $table) {
            $table->dropColumn('last_update');
        });

        Schema::table('threads', function (Blueprint $table) {
            $table->dropColumn('last_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forums', function (Blueprint $table) {
            $table->datetime('last_update')->default(Carbon::now());
        });
        Schema::table('threads', function (Blueprint $table) {
            $table->datetime('last_update')->default(Carbon::now());
        });
    }
}
