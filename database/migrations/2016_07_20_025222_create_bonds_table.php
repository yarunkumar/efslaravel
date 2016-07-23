<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBondsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bonds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bondtype');
            $table->string('description');
            $table->integer('investedvalue');
            $table->float('percentage');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('bonds', function (Blueprint $table) {
           $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::drop('bonds');
    }
}
