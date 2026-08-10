<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            [
                "name" => "Personal",
                "color" => "#329864",
            ],
            [
                "name" => "Work",
                "color" => "#f5a623",
            ],
            [
                "name" => "Shopping",
                "color" => "#50e3c2",
            ],
            [
                "name" => "Fitness",
                "color" => "#4a90e2",
            ],
        ]);
    }
}
