<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocmedFieldsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('whatsapp_number')->default('');
            $table->string('facebook_id')->default('');
            $table->string('twitter_id')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('whatsapp_number');
            $table->dropColumn('facebook_id');
            $table->dropColumn('twitter_id');
        });
    }
}
