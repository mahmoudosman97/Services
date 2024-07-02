<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;


class CategoryBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'text_ar',
        'text_en',
        'image',
        'pagetitle_ar',
        'pagetitle_en',
    ];

    
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id', );
    }

}
