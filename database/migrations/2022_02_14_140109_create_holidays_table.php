<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {

            $table->id();
            $table->string('city', 50);
            $table->string('departure', 20);
            $table->string('arrival', 20);
            $table->time('departure_time')->unsigned();
            $table->time('arrival_time')->unsigned();
            $table->string('address', 100);
            $table->string('type', 50);
            $table->text('description');
            $table->decimal('price', 8, 2)->unsigned();
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
        Schema::dropIfExists('holidays');
    }
}
