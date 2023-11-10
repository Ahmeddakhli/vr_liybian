<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPurposeIdSellRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('i_sell_unit_requests', function (Blueprint $table) {

            $table->integer('i_purpose_id')->unsigned()->index();
            $table->foreign('i_purpose_id')->references('id')->on('i_purposes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('i_sell_unit_requests', function (Blueprint $table) {

        });
    }
}
