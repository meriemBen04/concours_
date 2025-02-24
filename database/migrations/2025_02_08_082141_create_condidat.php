<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condidats', function (Blueprint $table) {
        
            $table->id()->autoIncrement();
            $table->string('nom');
            $table->string('prenom');
            $table->string('matricule')->unique();
            $table->string('email')->unique()->nullable();
            $table->date('date_naissance');
            $table->foreignId('specialite_id')->constrained();
            $table->string('telephone')->nullable();
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condidat');
    }
}
