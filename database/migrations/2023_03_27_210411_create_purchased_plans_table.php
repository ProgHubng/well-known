<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('plan_id')->nullable();
            $table->float('daily_income')->nullable();
            $table->float('price')->nullable();
            $table->enum('status', ['fail','pending','success'])->nullable();
            $table->time('start_date')->nullable();
            $table->time('end_date')->nullable();
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
        Schema::dropIfExists('purchased_plans');
    }
}
