<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('prenoms');
            $table->string('nom');
            $table->string('datnais');
            $table->string('lieunais');
            $table->enum('sexe', ['M','F']);
            $table->string('matricule')->unique();
            $table->string('photo')->default('cem/students/default.jpg');
            $table->string('prenomspere')->nullable();
            $table->string('prenomNomMere')->nullable();
            $table->string('tuteur')->nullable();
            $table->string('contact')->nullable();
            $table->string('adresse')->nullable();
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
        Schema::dropIfExists('students');
    }
}
