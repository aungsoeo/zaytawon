<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('main_category_id');
            $table->integer('sub_category_id');
            $table->text('short_description');
            $table->text('detail_description');
            $table->string('feature_photo');
            $table->string('detail_photo');
            $table->string('custom_field1');
            $table->string('custom_field2');
            $table->string('custom_field3');
            $table->string('custom_field4');
            $table->string('custom_field5');
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
        //
        Schema::dropIfExists('posts');
    }
}
