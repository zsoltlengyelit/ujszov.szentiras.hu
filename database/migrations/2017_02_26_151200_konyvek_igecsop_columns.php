<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KonyvekIgecsop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konyvek', function (Blueprint $table) {
            $table->unsignedInteger('igecsop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konyvek', function (Blueprint $table) {
            $table->dropColumn('igecsop');
        });
    }
}
