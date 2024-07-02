<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderPosition extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function sliders()
    {
        return $this->hasMany(Slider::class, 'category_id', );
    }
}
