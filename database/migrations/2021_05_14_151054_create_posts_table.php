<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable()->default('text'); /*colum:string*/
            $table->biginteger('category_id')->insigned()->nullable(); /*colum:integer foranea de la tabla categories*/
            $table->text('description')->nullable(); /*colum:text para textarea*/
            $table->enum('state',['post','no post'])->default('no post'); /*opciones select*/
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
        Schema::dropIfExists('posts');
    }
}
