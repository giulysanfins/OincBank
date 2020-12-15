<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUserAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('documento',30)->after('role');
            $table->date('data_nascimento')->nullable()->after('documento');
            $table->string('inscricao_estadual',30)->nullable()->after('data_nascimento');
            $table->string('telefone',15)->after('inscricao_estadual');
            $table->datetime('termos_condicoes')->after('telefone')->nullable();
            $table->integer('tipo')->after('termos_condicoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('documento');
            $table->dropColumn('data_nascimento');
            $table->dropColumn('inscricao_estadual');
            $table->dropColumn('telefone');
            $table->dropColumn('termos_condicoes');
            $table->dropColumn('tipo');
        });
    }
}
