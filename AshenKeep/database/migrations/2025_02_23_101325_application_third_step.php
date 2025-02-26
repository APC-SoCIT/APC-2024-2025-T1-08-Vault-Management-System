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
        Schema::create('application_third_step', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relates to the users table
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('donors_occupation')->nullable();
            $table->string('employers_name_or_business_name')->nullable();
            $table->text('business_address')->nullable();
            $table->string('employers_email_or_business_email_address')->nullable();
            $table->string('business_landline_number')->nullable();
            $table->string('business_mobile_number')->nullable();
            $table->string('position')->nullable();
            $table->string('years_in_employment_or_business')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_third_step');
    }
};
