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
        Schema::create('application_first_step', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relates to the users table
            $table->string('email')->unique();
            $table->string('landline_number')->nullable();
            $table->string('mobile_number');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('citizenship');
            $table->string('place_of_catholic_baptism');
            $table->date('date_of_catholic_baptism');
            $table->string('religious_organization_affiliated_with');
            $table->foreignId('vault_id')->nullable()->constrained()->onDelete('cascade'); // Relates to the vaults table


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_first_step');
    }
};
