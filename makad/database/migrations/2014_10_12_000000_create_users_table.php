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
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('referral')->nullable();
            $table->string('my_refer_code');
            $table->string('my_refer_link');
            $table->float('balance');
            $table->float('earn');
            $table->integer('level1_referral_id')->nullable();
            $table->integer('level2_referral_id')->nullable();
            $table->integer('level3_referral_id')->nullable();
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
