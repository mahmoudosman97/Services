<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ar',
        'title_en',
        'pagetitle_ar',
        'pagetitle_en',
        'body_ar',
        'body_en',
        'image',
    ];

   
}
