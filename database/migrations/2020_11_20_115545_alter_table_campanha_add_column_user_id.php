<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCampanhaAddColumnUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('campanhas', function (Blueprint $table) {
            $table->dropColumn('categoria');
            $table->integer('categoria_id')->after('titulo');
        });

        Schema::table('campanhas', function (Blueprint $table) {
            $table->integer('user_id')->after('categoria_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campanhas', function (Blueprint $table) {
            $table->dropColumn('categoria_id');
            $table->string('categoria_id',255)->after('titulo');
        });
        
        Schema::table('campanhas', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
