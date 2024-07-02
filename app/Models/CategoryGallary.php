<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGallary extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function gallaries()
    {
        return $this->hasMany(Gallary::class, 'category_id', );
    }
}
