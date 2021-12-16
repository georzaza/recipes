<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*  Every recipe needs it's ingredients.
    But since not all recipes need the same number of
    ingredients, we have created another table called ingredients
    to store them. Nothing unusual here, everything is self-explanatory.
*/

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('recipe_id');
            $table->bigInteger('user')->unsigned();
            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE'); // on deleting a user, delete all his recipes too.
            $table->string('recipe_name');
            $table->longText('execution');
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
        Schema::dropIfExists('recipes');
    }
}
