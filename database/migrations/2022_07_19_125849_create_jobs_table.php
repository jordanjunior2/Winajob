<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id()->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('user_id');
            $table->integer('company_id');
            $table->string('titre')->nullable();
            $table->string('slug')->nullable();
            $table->string('roles')->nullable();
            $table->string('genre')->nullable();
            $table->string('image')->nullable();
            $table->string('education')->nullable();
            $table->text('description')->nullable();
            $table->integer('categorie_id')->nullable();
            $table->string('annee_experience')->nullable();
            $table->integer('salaire_min')->nullable();
            $table->integer('salaire_max')->nullable();
            $table->string('position')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('responsabilites')->nullable();
            $table->string('horaires')->nullable();
            $table->string('statut')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('experience')->nullable();
            $table->string('type')->nullable();
            $table->text('adresse')->nullable();
            $table->date('last_date')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
