<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id()->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('user_id');
            $table->text('adresse');
            $table->string('genre')->default('Null');
            $table->date('date_naissance')->default('0000-00-00');
            $table->string('fonction');
            $table->string('situation');
            $table->string('ville');
            $table->string('pays');
            $table->string('salaire');
            $table->string('societe_actu');
            $table->integer('nbre_etoile');
            $table->string('description');
            $table->string('portfolio');
            $table->text('bio');
            $table->text('cover_letter');
            $table->string('cv');
            $table->string('avatar');
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
        Schema::dropIfExists('profils');
    }
}
