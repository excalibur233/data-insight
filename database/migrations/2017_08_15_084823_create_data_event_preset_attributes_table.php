<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEventPresetAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_event_preset_attributes', function (Blueprint $table) {
            $table->increments('id');
            // 设备&系统
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
            // 首次
            $table->string('is_login')->nullable()->comment('是否登陆');
            $table->string('is_first_day')->nullable()->comment('是否首日访问 0.不是 1.是');
            $table->string('is_first_time')->nullable()->comment('是否首次访问 0.不是 1.是');
            // 地区 TODO 城市库
            $table->string('country')->nullable()->comment('国家');
            $table->string('province')->nullable()->comment('省份');
            $table->string('city')->nullable()->comment('城市');
            // 推广
            $table->string('utm_medium')->nullable()->comment('广告系列媒介');
            $table->string('utm_source')->nullable()->comment('广告系列来源');
            $table->string('utm_matching_type')->nullable()->comment('渠道追踪匹配模式');
            // 浏览器
            $table->string('browser')->nullable()->comment('浏览器');
            $table->string('browser_version')->nullable()->comment('浏览器版本');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_event_preset_attributes');
    }
}
