<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Hellow',
                'text' => 'Welcome here',
                'category_id' => 2,
            ],
            [
                'title' => 'Hi',
                'text' => 'Welcome here',
                'category_id' => 3,
            ],
            [
                'title' => 'Musta',
                'text' => 'Welcome here',
                'category_id' => 4,
            ],
            [
                'title' => 'Yow',
                'text' => 'Welcome here',
                'category_id' => 5,
            ],

        ];

        foreach ($posts as $post) {
            DB::table('posts')->insertOrIgnore($post);
        }
    }
}
