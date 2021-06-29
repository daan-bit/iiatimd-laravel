<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWerktijdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('werktijden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->dateTime('begin_shift')->nullable();
            $table->string("aantal_uren_gewerkt");
            $table->string("aantal_uren_pauze");
            $table->dateTime("einde_shift")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('werktijden', function (Blueprint $table) {
            $table->dropForeign('werktijden_user_id_foreign');
        });

        Schema::dropIfExists('werktijden');
    }
}
