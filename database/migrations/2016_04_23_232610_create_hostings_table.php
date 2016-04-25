<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('name');
            $table->integer('monthly');
            $table->integer('semi_annually');
            $table->integer('annually');
            $table->string('space');
            $table->string('bandwith');
            $table->string('addon_domain');
            $table->string('email_hosting');
            $table->string('railgun');
            $table->string('backup');
            $table->string('link');
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
        Schema::drop('hostings');
    }
}
