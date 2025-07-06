<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title_de');
            $table->string('title_en');
            $table->text('content_de')->nullable();
            $table->text('content_en')->nullable();
            $table->string('meta_title_de')->nullable();
            $table->string('meta_title_en')->nullable();
            $table->string('meta_description_de')->nullable();
            $table->string('meta_description_en')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
