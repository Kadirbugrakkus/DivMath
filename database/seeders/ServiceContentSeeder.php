<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ServiceContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 7; $i++) {
            $title = $faker->sentence(6);
            DB::table('servicescontent')->insert([
                'servicesId' => $i+1,
                'title' => $title,
                'image' => $faker->imageUrl(800, 400, 'cats', true, 'Web Project'),
                'text' => $faker->paragraph(6),
                "slug" => Str::slug($title, ''),
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
