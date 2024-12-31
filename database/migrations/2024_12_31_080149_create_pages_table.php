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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Page name
            $table->string('slug')->unique(); // Slug for URL
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the page
            $table->string('meta_title')->nullable(); // Meta title for SEO
            $table->text('meta_description')->nullable(); // Meta description for SEO
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
