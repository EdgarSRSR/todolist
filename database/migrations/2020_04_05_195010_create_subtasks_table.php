<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtasks', function (Blueprint $table) {
            $table->increments('subtaskid');
            $table->integer('taskid')->unsigned();
            $table->string('namesubtask');
            $table->date('datecreation');
            $table->date('dateupdate')->useCurrent();
            $table->integer('urgency');
            $table->boolean('completed')->default(false);;
            $table->foreign('taskid')->references('taskid')->on('tasks')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtasks');
    }
}
