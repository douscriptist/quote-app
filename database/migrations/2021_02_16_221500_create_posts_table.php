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
            $table->id();   // auto incrementing pk
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->integer('user_id')->unsigned()->index(); // alternative without cascade
            $table->text('content');
            $table->timestamps(); // created_at // updated_at
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
