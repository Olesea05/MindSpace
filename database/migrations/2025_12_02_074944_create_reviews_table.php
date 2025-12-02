<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();      // имя или псевдоним
            $table->string('email');                 // для связи/модерации
            $table->string('phone')->nullable();
            $table->tinyInteger('rating')->default(5); // 1..5
            $table->text('message');
            $table->string('status')->default('approved'); // approved или pending
            $table->ipAddress('ip')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
