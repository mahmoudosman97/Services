<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function slider_position()
    {
        return $this->belongsTo(SliderPosition::class, 'category_id');
    }

}
