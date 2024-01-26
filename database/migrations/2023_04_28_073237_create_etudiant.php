<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->string('etd_id')->primary();
            $table->string('etd_nom');
            $table->string('etd_prenom');
            $table->string('etd_sexe');
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_fil');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_fil')->references('idfil')->on('filiere');

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
        Schema::dropIfExists('etudiant');
    }
}
