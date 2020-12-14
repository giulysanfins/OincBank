<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePayments2Retirada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->string('documento')->after('preference_id')->nullable();
            $table->string('bank_id')->after('documento')->nullable();
            $table->string('agencia')->after('bank_id')->nullable();
            $table->string('conta_corrente')->after('agencia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('documento');
            $table->dropColumn('bank_id');
            $table->dropColumn('agencia');
            $table->dropColumn('conta_corrente');
        });
    }
}
