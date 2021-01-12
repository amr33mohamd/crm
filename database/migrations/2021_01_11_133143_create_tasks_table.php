<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('owner')->nullable();
            $table->string('subject')->nullable();
            $table->date('due_date')->nullable();
            $table->string('client')->nullable();
            $table->string('monster_leads')->nullable();
            $table->integer('status')->default(0);
            $table->integer('priority')->default(1);
            $table->integer('reminder')->default(1);
            $table->integer('repeat')->default(1);
            $table->string('task_source')->nullable();
            $table->string('task_google_id')->nullable();
            $table->string('description')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->unsignedBigInteger('currency_id')->unsigned()->nullable();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('set null');
            $table->morphs('taskable') ;


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
        Schema::dropIfExists('tasks');
    }
}