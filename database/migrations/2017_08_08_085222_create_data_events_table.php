<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_event_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data_event_type_name')->comment('事件类型');
            $table->string('data_event_type_name_cn')->comment('事件类型-中文');
            $table->text('data_event_name_description')->comment('事件类型描述');
            $table->timestamps();
        });

        Schema::create('data_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_user_id')->nullable()->comment('用户ID');
            $table->string('data_user_identify_id')->nullable()->comment('用户识别ID');
            $table->unsignedInteger('data_event_type_id')->nullable()->comment('事件类型');
            /** 预设属性 **/
            $table->string('ip')->nullable()->comment('IP');
            $table->string('lib_version')->nullable()->comment('sdk版本');
            $table->string('lib')->nullable()->comment('sdk类型');
            $table->string('app_version')->nullable()->comment('应用版本');
            $table->string('model')->nullable()->comment('设备型号');
            $table->string('manufacturer')->nullable()->comment('设备制造商');
            $table->string('screen_height')->nullable()->comment('屏幕高度');
            $table->string('screen_weight')->nullable()->comment('屏幕宽度');
            $table->string('carrier')->nullable()->comment('运营商');
            $table->string('network_type')->nullable()->comment('网络类型');
            $table->string('os')->nullable()->comment('操作系统');
            $table->string('os_version')->nullable()->comment('操作系统版本');
            $table->tinyInteger('wifi')->nullable()->comment('是否使用wifi 0.不是 1.是');
            // 预设属性-首次
            $table->string('is_login')->nullable()->comment('是否登陆');
            $table->string('is_first_day')->nullable()->comment('是否首日访问 0.不是 1.是');
            $table->string('is_first_time')->nullable()->comment('是否首次访问 0.不是 1.是');
            // 预设属性-地区 TODO 城市库
            $table->string('country')->nullable()->comment('国家');
            $table->string('province')->nullable()->comment('省份');
            $table->string('city')->nullable()->comment('城市');
            // 预设属性-推广
            $table->string('utm_medium')->nullable()->comment('广告系列媒介');
            $table->string('utm_source')->nullable()->comment('广告系列来源');
            $table->string('utm_matching_type')->nullable()->comment('渠道追踪匹配模式');
            // 预设属性-浏览器
            $table->string('browser')->nullable()->comment('浏览器');
            $table->string('browser_version')->nullable()->comment('浏览器版本');
            $table->timestamps();

            $table->foreign('data_user_id')->references('id')->on('data_users');
            $table->foreign('data_user_identify_id')->references('identify_id')->on('data_users');
            $table->foreign('data_event_type_id')->references('id')->on('data_event_types');
        });


        Schema::create('data_attribute_data_event_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_event_type_id')->comment('事件类型ID');
            $table->unsignedInteger('data_attribute_id')->comment('属性ID');
            $table->timestamps();

            $table->foreign('data_event_type_id')->references('id')->on('data_event_types');
            $table->foreign('data_attribute_id')->references('id')->on('data_attributes');
        });

        Schema::create('data_attribute_data_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_event_type_id')->comment('事件类型ID');
            $table->unsignedInteger('data_event_id')->comment('元事件id');
            $table->unsignedInteger('data_attribute_id')->comment('元属性类型id');
            $table->unsignedInteger('data_attribute_value');
            $table->timestamps();

            $table->foreign('data_event_type_id')->references('id')->on('data_event_types');
            $table->foreign('data_event_id')->references('id')->on('data_events');
            $table->foreign('data_attribute_id')->references('id')->on('data_attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_events', function (Blueprint $table) {
            $table->dropForeign('data_events_data_user_id_foreign');
            $table->dropForeign('data_events_data_user_identify_id_foreign');
            $table->dropForeign('data_events_data_event_type_id_foreign');
        });
        Schema::table('data_attribute_data_events', function (Blueprint $table) {
            $table->dropForeign('data_attribute_data_events_data_event_type_id_foreign');
            $table->dropForeign('data_attribute_data_events_data_event_id_foreign');
            $table->dropForeign('data_attribute_data_events_data_attribute_id_foreign');
        });
        Schema::table('data_attribute_data_event_types', function (Blueprint $table) {
            $table->dropForeign('data_attribute_data_event_types_data_event_type_id_foreign');
            $table->dropForeign('data_attribute_data_event_types_data_attribute_id_foreign');
        });
        Schema::dropIfExists('data_attribute_data_event_types');
        Schema::dropIfExists('data_attribute_data_events');
        Schema::dropIfExists('data_events');
        Schema::dropIfExists('data_event_types');
    }
}
