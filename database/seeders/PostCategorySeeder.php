<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'News',
            'Technology',
            'Education',
            'Health',
            'Sport',
            'Politics',
        ];
        # code
        for ($i=0; $i < count($name); $i++) { 
            PostCategory::insert([
                'name' => $name[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        };
        // PostCategory::insert([
        //     'name' => 'News',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
