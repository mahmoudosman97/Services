<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('image');
            $table->text('body_ar');
            $table->text('body_en');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('pagetitle_ar');
            $table->string('pagetitle_en');
            $table->foreignId('category_id')->constrained('category_blogs');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
