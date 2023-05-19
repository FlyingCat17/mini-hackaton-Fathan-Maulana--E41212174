<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carType = ['SUV', 'Sedan'];
        foreach ($carType as $key => $value) {
            CarType::create([
                'name' => $value,
            ]);
        }
    }
}
