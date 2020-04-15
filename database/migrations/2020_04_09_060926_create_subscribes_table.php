<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id();
            $table->string('plan_id');
            $table->string('user_id');
            $table->string('payment_id');
            $table->string('totalamount');
            $table->string('duration');
            $table->longText('dates')->nullable();
            $table->string('doorno');
            $table->string('street');
            $table->string('city');
            $table->string('postelcode');
            $table->string('status')->nullable()->default('active');
            $table->string('timeslot')->nullable();
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
        Schema::dropIfExists('subscribes');
    }
}
