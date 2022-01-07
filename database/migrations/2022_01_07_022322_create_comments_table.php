<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            // on deleting  a user, delete all his comments too.
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
            
            // on deleting a user delete his comments too.
            $table->integer('recipe_id')->unsigned();
            $table->foreign('recipe_id')
                ->references('id')
                ->on('recipes')
                ->onDelete('CASCADE');

            $table->date('date');
            $table->string('comment'); //255 chars are ok for a comment.
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
        Schema::dropIfExists('comments');
    }
}
