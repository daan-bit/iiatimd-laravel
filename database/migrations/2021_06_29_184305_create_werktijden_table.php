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
            $table->unsignedBigInteger('id')->primary()->default(1);
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->string('begin_shift')->nullable();
            $table->string("einde_shift")->nullable();
            $table->integer("inLaravelDB")->default(1);
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
