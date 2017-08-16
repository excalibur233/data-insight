<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRegisterEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_register_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_user_id')->nullable()->comment('用户ID');
            $table->unsignedInteger('data_user_identify_id')->nullable()->comment('用户识别ID');
            $table->unsignedInteger('data_event_preset_attribute_id')->nullable()->comment('事件预设属性');

            $table->string('register_channel')->nullable()->comment('注册方式');
            $table->string('user_type')->nullable()->comment('用户类型');
            $table->timestamps();

            $table->foreign('data_user_id')->references('id')->on('data_users');
            $table->foreign('data_user_identify_id')->references('identify_id')->on('data_users');
            $table->foreign('data_event_preset_attribute_id')->references('id')->on('data_event_preset_attributes');
        });

        Schema::create('data_register_event_meta_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_register_event_id')->comment('事件id');
            $table->unsignedInteger('data_meta_attribute_type_id')->comment('元属性类型id');
            $table->string('meta_attribute_value');
            $table->timestamps();

            $table->foreign('data_register_event_id')->references('id')->on('data_register_events');
            $table->foreign('data_meta_attribute_type_id')->references('id')->on('data_meta_attribute_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_register_events', function (Blueprint $table) {
            $table->dropForeign('data_register_events_data_user_id_foreign');
            $table->dropForeign('data_register_events_data_user_identify_id_foreign');
            $table->dropForeign('data_register_events_data_event_preset_attribute_id_foreign');
        });
        Schema::table('data_app_install_event_meta_attributes', function (Blueprint $table) {
            $table->dropForeign('data_register_event_meta_attributes_data_register_event_id_foreign');
            $table->dropForeign('data_register_event_meta_attributes_data_meta_attribute_type_id_foreign');
        });
        Schema::dropIfExists('data_register_event_meta_attributes');
        Schema::dropIfExists('data_register_events');
    }
}
