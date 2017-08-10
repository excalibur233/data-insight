<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPageViewEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_page_view_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_user_id')->comment('用户ID');
            $table->string('data_user_identify_id')->comment('用户识别ID');
            // TODO 补全字段
            $table->timestamps();

            $table->foreign('data_user_id')->references('id')->on('data_users');
            $table->foreign('data_user_identify_id')->references('identify_id')->on('data_users');
        });

        Schema::create('data_page_view_event_meta_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_page_view_event_id')->comment('事件id');
            $table->unsignedInteger('data_meta_attribute_type_id')->comment('元属性类型id');
            $table->string('meta_attribute_value');
            $table->timestamps();

            $table->foreign('data_page_view_event_id')->references('id')->on('data_page_view_events');
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
        Schema::table('data_page_view_events', function (Blueprint $table) {
            $table->dropForeign('data_page_view_events_data_user_id_foreign');
            $table->dropForeign('data_page_view_events_data_user_identify_id_foreign');
        });
        Schema::table('data_page_view_event_meta_attributes', function (Blueprint $table) {
            $table->dropForeign('data_page_view_event_meta_attributes_data_page_view_event_id_foreign');
            $table->dropForeign('data_page_view_event_meta_attributes_data_meta_attribute_type_id_foreign');
        });

        Schema::dropIfExists('data_page_view_event_meta_attributes');
        Schema::dropIfExists('data_page_view_events');
    }
}
