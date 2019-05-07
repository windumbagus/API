<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MstRole', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RoleName',30);
            $table->datetime('AddedDate');
            $table->integer('UserAdded');
            $table->datetime('UpdatedDate');
            $table->integer('UserUpdated');
            $table->string('ProductOwner',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MstRole');
    }
}
