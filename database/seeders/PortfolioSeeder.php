<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PortfolioSeeder extends Seeder
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
            $title = $faker->sentence(1);
            DB::table('portfolio')->insert([
                'title' => $title,
                'image' => $faker->imageUrl(422, 422, 'cats', true, 'Web Project'),
                'language' => $title,
                "slug" => Str::slug($title, ''),
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
