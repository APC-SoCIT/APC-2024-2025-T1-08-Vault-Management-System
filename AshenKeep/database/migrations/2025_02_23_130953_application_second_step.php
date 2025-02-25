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
        Schema::create('second_apply', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('permanent_address');
            $table->string('current_address');
            $table->string('provincial_address');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('second_apply');
    }
};
