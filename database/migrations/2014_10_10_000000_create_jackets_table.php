<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jackets', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer', 50);
            $table->string('model_name', 50)->nullable();
            $table->string('colour', 50);
            $table->string('size', 10);
           // $table->boolean('is_available');
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
        Schema::dropIfExists('jackets');
    }
}
