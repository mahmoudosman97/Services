<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryGallary; 


class Gallary extends Model
{
    
    use HasFactory;
    
    protected $guarded= [];

    public function category_gallaries()
    {
        return $this->belongsTo(CategoryGallary::class, 'category_id');
    }
}
