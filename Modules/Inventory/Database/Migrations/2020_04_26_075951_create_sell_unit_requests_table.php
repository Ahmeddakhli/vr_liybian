<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellUnitRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_sell_unit_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('compound');
            $table->integer('i_purpose_type_id')->unsigned()->index();
            $table->foreign('i_purpose_type_id')->references('id')->on('i_purpose_types');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('i_unit_id')->unsigned()->index();
            $table->foreign('i_unit_id')->references('id')->on('i_units');
            $table->string('pay_status')->nullable()->default("فى انتظار المراجعه");
            $table->string('unit_name');
            $table->mediumText('comments');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->boolean('is_seen')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_sell_unit_requests');
    }
}
