<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allotlists', function (Blueprint $table) {
            $table->id();
            $table->double('sid');
            $table->string('name');
            $table->string('room');
            $table->double('phone');
            $table->string('address');
            $table->double('p_phone');
            

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
        Schema::dropIfExists('allotlists');
    }
}
