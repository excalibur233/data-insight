<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('event_id');
            $table->string('value');
            $table->string('description');
            $table->json('extra');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('attribute_types');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attributes', function(Blueprint $table) {
            $table->dropForeign('attributes_type_id_foreign');
            $table->dropForeign('attributes_event_id_foreign');
        });

        Schema::dropIfExists('attributes');
    }
}
