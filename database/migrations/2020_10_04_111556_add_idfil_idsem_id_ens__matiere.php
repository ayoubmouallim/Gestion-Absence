<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdfilIdsemIdEnsMatiere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matieres', function (Blueprint $table) {
            //
            $table->foreignId('id_filiere')->constrained('filieres')
            ->onDelete('cascade');

            $table->foreignId('id_sem')->constrained('semestres')
            ->onDelete('cascade');

            $table->foreignId('id_ens')->constrained('enseignants')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matieres', function (Blueprint $table) {
            //
        });
    }
}
