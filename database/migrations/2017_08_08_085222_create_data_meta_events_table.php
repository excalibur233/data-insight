<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMetaEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_meta_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_user_id')->comment('用户ID');
            $table->string('data_user_identify_id')->comment('用户识别ID');
            $table->timestamps();
        });

        Schema::create('data_meta_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_meta_event_id')->comment('元事件id');
            $table->unsignedInteger('data_meta_attribute_type_id')->comment('元属性类型id');
            $table->string('meta_attribute_value');
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
        Schema::dropIfExists('data_meta_attributes');
        Schema::dropIfExists('data_meta_events');
    }
}
