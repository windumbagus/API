<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePushNotifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('push_notif', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Message',200);
            $table->string('CodeNotif',50);
            $table->date('CreatedDate');
            $table->date('UpdatedDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('push_notif');
    }
}
