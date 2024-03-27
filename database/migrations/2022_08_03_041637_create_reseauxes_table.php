<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReseauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseauxes', function (Blueprint $table) {
            $table->id();
            $table->integer('profil_id');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('google');
            $table->string('instagram');
            $table->string('LinkedIn');
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
        Schema::dropIfExists('reseauxes');
    }
}
