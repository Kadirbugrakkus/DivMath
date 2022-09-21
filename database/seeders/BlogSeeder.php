<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 6; $i++) {
            $title = $faker->sentence(6);
            DB::table('blogcontent')->insert([
                'category_id' => rand(1, 4),
                'author_id' => rand(1, 6),
                'title' => $title,
                'image' => $faker->imageUrl(800, 400, 'cats', true, 'Blog Deneme'),
                'content' => $faker->paragraph(6),
                "slug" => Str::slug($title, ''),
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
