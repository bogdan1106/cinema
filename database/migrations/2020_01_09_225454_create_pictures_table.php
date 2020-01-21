<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_ru');
            $table->string('title_eng');
            $table->string('slug');
            $table->integer('category_id');
            $table->string('poster');
            $table->integer('is_new')->default(0);
            $table->integer('year');
            $table->integer('budget');
            $table->integer('views');
            $table->text('description');
            $table->date('date');
            $table->integer('release');
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
        Schema::dropIfExists('pictures');
    }
}
