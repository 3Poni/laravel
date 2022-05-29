<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();

            $table->timestamps();
            // IDX
            $table->index('article_id', 'article_tag_article_idx');
            $table->index('tag_id', 'article_tag_tag_idx');
            // FK
            $table->foreign('article_id', 'article_tag_article_fk')->on('articles')->references('id');
            $table->foreign('tag_id', 'article_tag_tag_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tags');
    }
};
