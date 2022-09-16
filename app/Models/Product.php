<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'image',
        'weight',
        'time',
        'category_id',
        'profile_id',
        'position',
        'active',
    ];

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }
}
