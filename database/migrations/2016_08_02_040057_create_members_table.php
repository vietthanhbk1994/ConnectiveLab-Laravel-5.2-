<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatemembersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('position');
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('members', function(Blueprint $table) {
            $table->foreign('team_id')
                    ->references('id')
                    ->on('teams')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
        Schema::table('members', function(Blueprint $table) {
            $table->dropForeign(['team_id']);
        });
    }
}
