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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(1); // 1 = Active;
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('nationality');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('postcode');
            $table->string('emergency_phone');
            $table->string('emergency_name');
            $table->string('membership_plan');
            $table->string('skill_level');
            $table->date('skill_level_updated')->nullable();
            $table->date('start_day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
