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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relates to the users table
            $table->string('permanent_address')->nullable();
            $table->string('current_address')->nullable();
            $table->string('provincial_address')->nullable();
            $table->string('email')->unique();
            $table->string('landline_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('citizenship');
            $table->string('place_of_catholic_baptism')->nullable();
            $table->date('date_of_catholic_baptism')->nullable();
            $table->string('religious_organization_affiliated_with')->nullable();
            $table->string('spouses_name')->nullable();
            $table->date('spouses_date_of_birth')->nullable();
            $table->string('spouses_place_of_birth')->nullable();
            $table->string('spouses_email_address')->nullable();
            $table->string('spouses_landline_number')->nullable();
            $table->string('spouses_mobile_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
