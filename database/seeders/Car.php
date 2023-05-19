<?php

namespace Database\Seeders;

use App\Models\Car as ModelsCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Car extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsCar::create([
            'car_type_id' => '2',
            'name' => 'BMW 330i',
            'brand' => 'BMW',
            'license_plate' => 'DK 1234 AR',
            'color' => 'Hitam',
            'year' => '2019',
            'price' => '30000000',
        ]);
    }
}
