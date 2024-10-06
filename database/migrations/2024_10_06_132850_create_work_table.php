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
        Schema::create('work', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->foreignId('author_id')->constrained('author');
            $table->foreignId('publisher_id')->constrained('publisher');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work');
    }
};
