<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('target_user_id');
            $table->unsignedInteger('type_id');
            $table->string('description');
            $table->json('extra');
            $table->timestamps();

            $table->foreign('target_user_id')->references('id')->on('target_users');
            $table->foreign('type_id')->references('id')->on('event_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function(Blueprint $table) {
            $table->dropForeign('events_target_user_id_foreign');
            $table->dropForeign('events_type_id_foreign');
        });
        
        Schema::dropIfExists('events');
    }
}
