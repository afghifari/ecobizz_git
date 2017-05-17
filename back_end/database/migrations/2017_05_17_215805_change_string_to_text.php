<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeStringToText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->text('message')->nullable()->change();
        });

        Schema::table('timeline_posts', function (Blueprint $table) {
            $table->text('message')->nullable()->change();
        });

        Schema::table('forum_posts', function (Blueprint $table) {
            $table->text('content')->nullable()->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->text('owner')->default('')->nullable()->change();
            $table->text('address')->default('')->nullable()->change();
            $table->text('description')->default('')->nullable()->change();
            $table->text('needs')->default('')->nullable()->change();
            $table->text('products')->default('')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->string('message')->change();
        });

        Schema::table('timeline_posts', function (Blueprint $table) {
            $table->string('message')->change();
        });

        Schema::table('forum_posts', function (Blueprint $table) {
            $table->string('content')->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('owner')->change();
            $table->string('address')->default('')->change();
            $table->string('description')->default('')->change();
            $table->string('needs')->default('')->change();
            $table->string('products')->default('')->change();
        });
    }
}
