<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationSalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectation_salles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('salle_id')->constrained();
            $table->foreignId('concours_id')->constrained();
            $table->foreignId('condidat_id')->constrained();
            $table->softDeletes();});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affectation_salles');
    }
}
