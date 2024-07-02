<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->text('phone');
            $table->text('title_ar');
            $table->text('title_en');
            $table->text('address');
            $table->text('location');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('youtube');
            $table->string('pagetitle_ar');
            $table->string('pagetitle_en');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
