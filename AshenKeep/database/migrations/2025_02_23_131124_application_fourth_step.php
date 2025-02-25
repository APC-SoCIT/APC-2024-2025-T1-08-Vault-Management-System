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
        Schema::create('fourth_apply', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->string('spouses_name')->nullable();
            $table->date('spouses_date_of_birth')->nullable();
            $table->string('spouses_place_of_birth')->nullable();
            $table->string('spouses_email_address')->nullable();
            $table->string('spouses_landline_number')->nullable();
            $table->string('spouses_mobile_number')->nullable();
 
            // Father's Information
            $table->string('fathers_name');
            $table->string('fathers_email_address')->nullable();
            $table->string('fathers_landline_number')->nullable();
            $table->string('fathers_mobile_number')->nullable();
 
            // Mother's Information
            $table->string('mothers_name');
            $table->string('mothers_email_address')->nullable();
            $table->string('mothers_landline_number')->nullable();
            $table->string('mothers_mobile_number')->nullable();

            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fourth_apply');
    }
};
