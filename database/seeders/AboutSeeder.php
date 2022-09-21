<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 3; $i++) {
            $title = $faker->sentence(6);
            DB::table('about')->insert([
                'title' => $title,
                'icon' => $faker->imageUrl(800, 400, 'cats', true, 'Web Project'),
                'content' =>$faker->paragraph(6),
                'slug' => Str::slug($title, ''),
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
