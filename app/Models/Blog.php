<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryBlog;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'body_ar',
        'body_en',
        'title_ar',
        'title_en',
        'pagetitle_ar',
        'pagetitle_en',
        'category_id',
    ];

    public function category_blog()
    {
        return $this->belongsTo(CategoryBlog::class, 'category_id');
    }
}
