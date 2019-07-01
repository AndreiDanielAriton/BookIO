<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBookshelfPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_bookshelf', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('bookshelf_id');
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
        Schema::dropIfExists('book_bookshelf');
    }
}
