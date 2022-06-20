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
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->length(50);
            $table->string('address');
            $table->double('rent');
            $table->string('distance')->length(50);
            $table->text('location')->nullable();
            $table->string('type')->length(50);
            $table->double('avg_rating')->length(20)->default(0);
            $table->text('description');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('accomodations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
