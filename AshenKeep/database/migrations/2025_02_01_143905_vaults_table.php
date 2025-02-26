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
        Schema::create('vaults', function (Blueprint $table) {
            $table->id();
            $table->string('vault_number')->unique();
            $table->string('location')->nullable();
            $table->unsignedBigInteger('vault_owner_id')->nullable();
            $table->string('owner')->nullable();
            $table->date('date_issued')->nullable();
            $table->integer('urns_quantity')->nullable();
            $table->string('availability')->default('Unavailable');
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaults');
    }
};