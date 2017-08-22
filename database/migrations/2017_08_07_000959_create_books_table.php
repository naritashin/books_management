<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('books', function(Blueprint $table)
        {

            $table->increments('id');
            $table->integer('position_id')->nullable();
            $table->integer('volume_number');
            $table->integer('related_book_id');
            $table->integer('position_id');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
