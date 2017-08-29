<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data_attribute_name')->comment('属性类型');
            $table->string('data_attribute_name_cn')->comment('属性中文名称');
            $table->text('data_attribute_name_description')->comment('属性描述');
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
        Schema::dropIfExists('data_attributes');
    }
}
