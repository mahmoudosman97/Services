<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'pagetitle_ar',
        'pagetitle_en',
        'image',
        'address',
        'phone',
        'email',
        'summary',
        'spec',
        'exp',
        'skills',
        'education',
    ];
}


