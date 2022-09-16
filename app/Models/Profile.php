<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'slug', 'adress',
        'phone_1', 'phone_2', 'logo', 'banner', 'wifi', 'work_hours', 'active'
    ];
}
