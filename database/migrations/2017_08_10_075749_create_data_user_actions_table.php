<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_user_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_user_id')->comment('用户ID');
            $table->string('data_user_identify_id')->comment('用户识别ID');
            $table->string('data_event_name')->comment('事件名称');
            $table->unsignedInteger('data_event_id')->comment('对应事件id');
            $table->timestamps();

            $table->foreign('data_user_id')->references('id')->on('data_users');
            $table->foreign('data_user_identify_id')->references('identify_id')->on('data_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_user_actions', function (Blueprint $table) {
            $table->dropForeign('data_user_actions_data_user_id_foreign');
            $table->dropForeign('data_user_actions_data_user_identify_id_foreign');
        });
        Schema::dropIfExists('data_user_actions');
    }
}
