<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voyage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyage', function (Blueprint $table){
            $table->id();
            $table->string('nomVoyage', 255);
            $table->date('dateDebut', 255);
            $table->string('duree', 255);
            $table->string('ville', 255);
            $table->decimal('prix', 7);
            $table->foreignId('departement_id', 14);
            $table->foreignId('categorie_id', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyage');
    }
}
