<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->integer('pagamento_id')->after('status')->nullable();
            $table->string('pagamento_tipo',30)->after('pagamento_id')->nullable();
            $table->string('preference_id',100)->after('pagamento_tipo')->nullable();
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
            $table->dropColumn('pagamento_id');
            $table->dropColumn('pagamento_tipo');
            $table->dropColumn('preference_id');
        });
    }
}
