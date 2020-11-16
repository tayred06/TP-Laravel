<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table){
            $table->id();
            $table->string('prenom', 255);
            $table->string('nom', 255);
            $table->string('adresse', 255);
            $table->string('ville', 255);
            $table->string('CP', 7);
            $table->string('telephone', 14);
            $table->string('courriel', 255);
            $table->string('genre', 255);
            $table->foreignId('province_id', 11);
            $table->foreignId('premierContact_id', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
