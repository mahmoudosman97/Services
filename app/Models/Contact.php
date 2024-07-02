<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['email','phone','title_ar','title_en','address','location','facebook','twitter','instagram','youtube' , 'pagetitle_ar' , 'pagetitle_en'];
}
