<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('faq')->insert([

                'question' => $faker->text,
                'answer' => $faker->text,
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
