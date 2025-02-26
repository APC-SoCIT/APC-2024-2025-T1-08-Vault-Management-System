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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('currregion')->nullable();
            $table->string('currprovince')->nullable();
            $table->string('currcity')->nullable();
            $table->string('currbarangay')->nullable();
            $table->string('currstreet')->nullable();
            $table->string('permregion')->nullable();
            $table->string('permprovince')->nullable();
            $table->string('permcity')->nullable();
            $table->string('permbarangay')->nullable();
            $table->string('permstreet')->nullable();
            $table->string('provregion')->nullable();
            $table->string('provprovince')->nullable();
            $table->string('provcity')->nullable();
            $table->string('provbarangay')->nullable();
            $table->string('provstreet')->nullable();
 
            $table->string('status')->default('pending');
 
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