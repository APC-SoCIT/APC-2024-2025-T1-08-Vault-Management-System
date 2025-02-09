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
        Schema::create('thirdbeneficiary', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();

            // Personal Details
            $table->string('full_name');
            $table->text('permanent_address');
            $table->text('current_address');
            $table->text('provincial_address');
            $table->string('email');
            $table->string('landline_number')->nullable();
            $table->string('mobile_number');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('citizenship');
            $table->string('place_of_catholic_baptism');
            $table->date('date_of_catholic_baptism');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thirdbeneficiary');
    }
};
