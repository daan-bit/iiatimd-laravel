<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVakantiedagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vakantiedagen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->string('vakantie_van');
            $table->string("vakantie_tot");
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
        Schema::table('vakantiedagen', function (Blueprint $table) {
            $table->dropForeign('vakantiedagen_user_id_foreign');
        });

        Schema::dropIfExists('vakantiedagen');
    }
}
