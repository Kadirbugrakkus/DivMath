<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
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
            DB::table('teams')->insert([

                'name' => $faker->name,
                'image' => $faker->imageUrl('370', 415, 'human'),
                'title' => $faker->title,
                "slug" => Str::slug($faker->name, ''),
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
