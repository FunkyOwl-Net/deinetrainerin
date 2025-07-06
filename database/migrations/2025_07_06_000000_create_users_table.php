<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Erzeugt die Tabelle für Benutzer.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false); // Admin-Flag
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
