<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabelle für dynamische Übersetzungen.
     */
    public function up(): void
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('locale', 2);
            $table->text('value');
            $table->timestamps();
            $table->unique(['key', 'locale']);
        });
    }

    /**
     * Rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
