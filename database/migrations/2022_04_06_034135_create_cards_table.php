}<?php

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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->integer('period');

            $table->foreignId('car_id')
                ->nullable()
                ->constrained();

            $table->foreignId('cat_card_type_id')
                ->nullable()
                ->constrained();

            $table->foreignId('cat_parking_place_id')
                ->nullable()
                ->constrained();

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
        Schema::dropIfExists('cards');
    }
};
