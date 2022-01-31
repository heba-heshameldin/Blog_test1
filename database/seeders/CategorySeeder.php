<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $catagories = [
            ['title' => 'Basics of cyber security'],
            ['title' => 'Network Pentester'],
            ['title' => 'Web Application Pentester'],
            ['title' => 'Advanced Pentester'],
            ['title' => 'Purple Team Member']
        ];

        // Now just pass this array to regular Eloquent function and Voila!
        Category::insert($catagories);
    }
}
