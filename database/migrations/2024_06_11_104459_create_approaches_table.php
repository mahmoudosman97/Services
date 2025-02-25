<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('approaches', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('pagetitle_ar');
            $table->string('pagetitle_en');
            $table->text('body_ar');
            $table->text('body_en');
            $table->string('image');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('approaches');
    }
};
