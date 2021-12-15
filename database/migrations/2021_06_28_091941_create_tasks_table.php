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
            //$table->timestamps();
            $table->string('task', 200);
            $table->date('begindate');
            $table->date('enddate');
             $table->unsignedBigInteger('user_id')
             ->nullable()->onUpdate('NO ACTION')->onDelete('NO ACTION')->nullable();
             
             $table->unsignedBigInteger('project_id')
             ->onUpdate("CASCADE")->onDelete("CASCADE");
             
             //$table->unsignedBigInteger('status_id');
             //->onUpdate('restrict')->onDelete('restrict');
             //$table->timestamps();

             $table->unsignedBigInteger('activity_id')
             ->onUpdate('restrict')->onDelete('restrict');//waar staat deze in de ERD?

             $table->timestamps();
        });

        Schema::table('tasks', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
       
            $table->foreign('project_id')->references('id')->on('projects');
        
            //$table->foreign('status_id')->references('id')->on('activities');

            $table->foreign('activity_id')->references('id')->on('activities');
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
