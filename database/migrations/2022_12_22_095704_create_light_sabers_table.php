<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('light_sabers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->float("price", 6, 2)->nullable();
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
        Schema::dropIfExists('light_sabers');
    }
};
