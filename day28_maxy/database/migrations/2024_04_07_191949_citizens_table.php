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
        Schema::dropIfExists('citizens');
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->integer('age')->nullable();
            $table->text('address')->nullable();
            $table->text('job')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
