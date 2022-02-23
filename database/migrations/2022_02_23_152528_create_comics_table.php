<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 13);
            $table->string('title', 100);
            $table->integer('number')->nullable();
            $table->string('author', 100);
            $table->string('format', 50);
            $table->string('publisher', 50);
            $table->string('edition', 50);
            $table->string('language', 50);
            $table->integer('pages');
            $table->float('price', 8, 2);
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
        Schema::dropIfExists('comics');
    }
}
