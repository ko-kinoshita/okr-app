<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objective', function (Blueprint $table) {
            $table->dropColumn('individual_objective');
            $table->dropColumn('group_objective');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('objective', function (Blueprint $table) {
            $table->boolean('individual_objective')->default(false);
            $table->boolean('group_objective')->default(false);
        });
    }
}
