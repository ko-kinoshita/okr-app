<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key_result');
            $table->string('objective');
            $table->string('group_objective');
            $table->string('group_key_result');
            $table->string('individual_objective');
            $table->string('individual_key_result');
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
        Schema::dropIfExists('allinfo');
    }
}
