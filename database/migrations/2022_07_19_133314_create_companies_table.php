<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('cname');
            $table->string('nom_recruteur');
            $table->string('slug');
            $table->string('email');
            $table->string('type');
            $table->integer('employes');
            $table->integer('experience');
            $table->integer('min');
            $table->integer('max');
            $table->integer('followers');
            $table->text('adresse');
            $table->integer('phone');
            $table->string('website');
            $table->string('logo');
            $table->string('cover_photo');
            $table->string('slogan');
            $table->text('description');
            $table->string('certification')->default('non');
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
        Schema::dropIfExists('companies');
    }
}
