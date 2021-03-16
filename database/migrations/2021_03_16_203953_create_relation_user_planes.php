<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationUserPlanes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userplan', function (Blueprint $table) {
            $table->primary(['user_id','id_plan']);
            $table->integer('user_id')->unsigned();
            $table->integer('id_plan')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_plan')->references('id')->on('planes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userplan');
    }
}

