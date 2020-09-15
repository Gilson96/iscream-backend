<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcecreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icecreams', function (Blueprint $table) {
            $table->id();
            $table->string("name", 30);
        });

        // pivot table
        Schema::create('icecream_van', function (Blueprint $table){
            $table->id();

            $table->foreignId("van_id")->unsigned();
            $table->foreign("van_id")->references("id")->on("vans")->onDelete("cascade");

            $table->foreignId("icecream_id")->unsigned();
            $table->foreign("icecream_id")->references("id")->on("icecreams")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icecream_van');
        Schema::dropIfExists('icecreams');
    }
}
