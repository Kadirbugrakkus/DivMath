<?php

namespace Database\Seeders;

use App\Models\PortfolioModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PortfolioSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(BlogcategorySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(ServiceContentSeeder::class);
    }
}
