<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user_account');
            $table->foreignId('book_id')->constrained('book');
            $table->timestampTz('loaned_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('due_date')->nullable();
            $table->timestampTz('returned_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan');
    }
};
