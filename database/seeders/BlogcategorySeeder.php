<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogcategory=['Günlük Yaşam','Teknoloji','Yazılım','Bilişim'];
        foreach ($blogcategory as $category)

        DB::table('blogcategory')->insert([
            'name'=>$category,
            'slug'=>Str::slug($category),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
