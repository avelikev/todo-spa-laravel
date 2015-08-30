<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_items', function( $table )
        {
            $table->increments('id');
            $table->string('description');
            $table->boolean('completed')->default( false );
            $table->integer('list_id')->unsigned();
            $table->foreign('list_id')->references('id')->on('lists');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('list_items');
    }
}
