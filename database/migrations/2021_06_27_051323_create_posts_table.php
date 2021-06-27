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
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->string('title')->nullable(false);
            $table->string('cover_img')->nullable();
            $table->string('description')->nullable(false);
            $table->string('slug')->unique();
            $table->string('description')->nullable()->change();
            $table->longText('content')->nullable(false);
            $table->text('meta')->nullable();
            $table->longText('html_content')->nullable(false);
            $table->tinyInteger('status')->default(0);
            $table->integer('view_count')->unsigned()->default(0);
            $table->timestamp('published_at')->nullable()->index();
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
