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
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 10);  // Language code (en, ja, etc)
            $table->string('group', 100);  // File name (text, validation, etc)
            $table->string('key');         // Translation key (welcome.title, etc)
            $table->text('value');         // Translated text
            $table->timestamps();
            
            // Index for faster lookups
            $table->unique(['locale', 'group', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
