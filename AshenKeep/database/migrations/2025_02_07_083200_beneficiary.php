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
        Schema::create('beneficiary', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            // Personal Details
            $table->string('first_full_name');
            $table->text('first_permanent_address');
            $table->text('first_current_address');
            $table->text('first_provincial_address');
            $table->string('first_email');
            $table->string('first_landline_number')->nullable();
            $table->string('first_mobile_number');
            $table->date('first_date_of_birth');
            $table->string('first_place_of_birth');
            $table->string('first_citizenship');
            $table->string('first_place_of_catholic_baptism');
            $table->date('first_date_of_catholic_baptism');

            $table->string('second_full_name');
            $table->text('second_permanent_address');
            $table->text('second_current_address');
            $table->text('second_provincial_address');
            $table->string('second_email');
            $table->string('second_landline_number')->nullable();
            $table->string('second_mobile_number');
            $table->date('second_date_of_birth');
            $table->string('second_place_of_birth');
            $table->string('second_citizenship');
            $table->string('second_place_of_catholic_baptism');
            $table->date('second_date_of_catholic_baptism');

            $table->string('third_full_name');
            $table->text('third_permanent_address');
            $table->text('third_current_address');
            $table->text('third_provincial_address');
            $table->string('third_email');
            $table->string('third_landline_number')->nullable();
            $table->string('third_mobile_number');
            $table->date('third_date_of_birth');
            $table->string('third_place_of_birth');
            $table->string('third_citizenship');
            $table->string('third_place_of_catholic_baptism');
            $table->date('third_date_of_catholic_baptism');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiary');
    }
};
