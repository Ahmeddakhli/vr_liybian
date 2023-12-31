<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeveloperMailAndNameToIDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('i_developers', function (Blueprint $table) {
            $table->string('developer_name')->nullable();
            $table->string('developer_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('i_developers', function (Blueprint $table) {
            $table->dropColumn('developer_name');
            $table->dropColumn('developer_email');
        });
    }
}
