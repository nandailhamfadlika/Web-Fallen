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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('title');
            $table->string('archetype');
            $table->string('weapon');
            $table->text('premise');
            $table->text('obstacle');
            $table->text('ambition');
            $table->text('quote');
            $table->string('image_path');
            $table->json('combat_tags')->nullable();
            $table->unsignedTinyInteger('power')->default(3);
            $table->unsignedTinyInteger('speed')->default(3);
            $table->unsignedTinyInteger('range')->default(3);
            $table->unsignedTinyInteger('difficulty')->default(3);
            $table->unsignedSmallInteger('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
