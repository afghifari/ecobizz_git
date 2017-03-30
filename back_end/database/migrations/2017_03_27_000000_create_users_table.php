<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('verified')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('last_seen')->default(Carbon::now());

            $table->string('profile_picture')->nullable();

            $table->string('address')->default('');
            $table->string('mobile_number')->default("");
            $table->string('description')->default('');
            $table->string('owner');
            $table->string('organization_name');
            $table->string('website')->default('');
            $table->string('organization_structure')->nullable();
            $table->string('needs')->default('');
            $table->string('products')->default('');
            $table->integer('role_id')->unsigned()->nullable();
            $table->string('profile')->default('');

            $table->foreign('role_id')
                  ->references('id')->on('roles')
                  ->onDelete('SET NULL');
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
