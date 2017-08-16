<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSearchEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_search_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_user_id')->nullable()->comment('用户ID');
            $table->unsignedInteger('data_user_identify_id')->nullable()->comment('用户识别ID');
            $table->unsignedInteger('data_event_preset_attribute_id')->nullable()->comment('事件预设属性');

            $table->string('keyword')->nullable()->comment('搜索关键字');
            $table->tinyInteger('is_history_word_used')->nullable()->comment('是否使用历史词 1.是 0.否');
            $table->tinyInteger('is_recommend_word_used')->nullable()->comment('是否使用推荐词 1.是 0.否');
            $table->tinyInteger('has_result')->nullable()->comment('是否有结果 1.是 0.否');
            $table->timestamps();

            $table->foreign('data_user_id')->references('id')->on('data_users');
            $table->foreign('data_user_identify_id')->references('identify_id')->on('data_users');
            $table->foreign('data_event_preset_attribute_id')->references('id')->on('data_event_preset_attributes');
        });

        Schema::create('data_search_event_meta_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_search_event_id')->comment('事件id');
            $table->unsignedInteger('data_meta_attribute_type_id')->comment('元属性类型id');
            $table->string('meta_attribute_value');
            $table->timestamps();

            $table->foreign('data_search_event_id')->references('id')->on('data_search_events');
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
        Schema::table('data_search_events', function (Blueprint $table) {
            $table->dropForeign('data_search_events_data_user_id_foreign');
            $table->dropForeign('data_search_events_data_user_identify_id_foreign');
            $table->dropForeign('data_search_events_data_event_preset_attribute_id_foreign');
        });
        Schema::table('data_app_install_event_meta_attributes', function (Blueprint $table) {
            $table->dropForeign('data_search_event_meta_attributes_data_search_event_id_foreign');
            $table->dropForeign('data_search_event_meta_attributes_data_meta_attribute_type_id_foreign');
        });
        Schema::dropIfExists('data_search_event_meta_attributes');
        Schema::dropIfExists('data_search_events');
    }
}
