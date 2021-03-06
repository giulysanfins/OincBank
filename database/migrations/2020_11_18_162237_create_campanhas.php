<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanhas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanhas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('categoria');
            $table->decimal('valor',20,2);
            $table->date('data_encerramento');
            $table->string('profile_image');
            $table->string('video')->nullable();
            $table->string('descricao',3000);
            $table->integer('status')->comment('0 desativado 1 pendente 2 aprovado 3 rejeitado');
            $table->string('motivo_deletado',3000)->nullable();
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
        Schema::dropIfExists('campanhas');
    }
}
