<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewBooks20170316 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = DB::table('konyvnevek');
        $table->insert([
                "nev" => "Spártaiak",
                "konyv_id" => "401",
                "hossz" => 1,
                "tipus" => "default"
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = DB::table('konyvnevek');
        $table->delete()->where('konyv_id', 401);
    }
}
