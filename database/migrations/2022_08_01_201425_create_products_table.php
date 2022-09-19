<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('title');
            $table->string('image_path');
            $table->longText('description');
            $table->float('fee');
            $table->integer('ram_size');
            $table->string('condition');
            $table->string('type');
            $table->timestamps();
            $table->datetime('publish_at')->nullable();
            $table->datetime('publish_until')->nullable();
            $table->boolean('is_published')->default(false);
            $table->string('category')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};

