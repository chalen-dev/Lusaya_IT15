<?php

namespace Database\Seeders;

use App\Enum\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array_map(function ($category) {
            return ['name' => $category->value];
        }, Categories::cases());

        foreach ($categories as $category) {
            DB::table('categories')->insertOrIgnore($category);
        }
    }
}
