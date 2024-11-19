<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Setup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function(Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->integer('questionable_id');
            $table->string('questionable_type');
            $table->timestamps();
        });
        Schema::create('question_typea', function(Blueprint $table) {
            $table->increments('id');
            $table->string('setting_a')->nullable();
            $table->string('config_a')->nullable();
            $table->integer('visualable_id');
            $table->string('visualable_type');
            $table->timestamps();
        });
        Schema::create('question_typeb', function(Blueprint $table) {
            $table->increments('id');
            $table->string('setting_b')->nullable();
            $table->string('config_b')->nullable();
            $table->string('option_b')->nullable();
            $table->integer('visualable_id');
            $table->string('visualable_type');
            $table->timestamps();
        });
        Schema::create('question_visual_42', function(Blueprint $table) {
            $table->increments('id');
            $table->string('visual_1')->nullable();
            $table->string('visual_2')->nullable();
            $table->string('visual_3')->nullable();
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
        //
    }
}
