<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $categories = [
            [
                'name' => 'Work',
                'color' => '#3B82F6',
            ],
            [
                'name' => 'Personal',
                'color' => '#EF4444',
            ],
            [
                'name' => 'Shopping',
                'color' => '#10B981',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([...$category,
                'user_id' => $user->id,
            ]);
        }
    }
}
