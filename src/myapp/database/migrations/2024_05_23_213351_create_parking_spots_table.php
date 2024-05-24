<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('parking_spots', function (Blueprint $table) {
            $table->id();
            $table->integer('floor');
            $table->string('sector');
            $table->boolean('is_occupied')->default(false);
            $table->string('occupant_type')->nullable();
            $table->foreignId('parking_lot_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parking_spots');
    }
};
