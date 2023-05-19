<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'car_type_id',
        'name',
        'brand',
        'price',
        'license_plate',
        'year',
        'color',
        'image'
    ];
}
