<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
              $table->foreign('roles_id')->references('id')->on('roles');
              $table->foreign('homestay_id')->references('id')->on('homestay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
              $table->dropForeign('transactions_roles_id_foreign');
              $table->dropForeign('transactions_homestay_id_foreign');
        });
    }
}
