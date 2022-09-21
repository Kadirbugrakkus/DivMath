<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogcategory=['Kurumsal Web Sitesi','E-Ticaret Sistemleri','Cari Hesap Takip Sistemi',
                    'Drone Çekim Hizmetleri','Kantar Otomasyonu','Web Tabanlı Yazılım','PLC Otomasyon Sistemleri'];
        foreach ($blogcategory as $category)
            DB::table('servicecategory')->insert([
                'icon'=>'fal fa-laptop-code',
                'title'=>$category,
                'slug'=>Str::slug($category),
                'created_at' => now(),
                'updated_at' => now()
            ]);

    }
}
