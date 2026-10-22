<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('done')->default(false);

            // TODO 1: Add the columns a todo needs.
            //         At minimum: a title (text) and whether it's done (yes/no).
            //         Think: should "done" have a default value?
            //         When finished, run: php artisan migrate
            //         Then open the table in HeidiSQL (Laragon > Database) and look at it.

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
