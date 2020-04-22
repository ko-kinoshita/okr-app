<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTwoColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('key_result', function (Blueprint $table) {
            $table->dropColumn('individual_key_result');
            $table->dropColumn('group_key_result');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('key_result', function (Blueprint $table) {
            $table->boolean('individual_key_result')->default(false);
            $table->boolean('group_key_result')->default(false);
        });
    }
}
