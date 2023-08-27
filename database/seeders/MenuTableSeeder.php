<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('menus')->truncate();
        DB::table('menus')->insert($this->getMenus());
        Schema::enableForeignKeyConstraints();
    }
    private function getMenus()
    {
        $faker = Factory::create();
        return [
            [
                'title'=>"Home",
                'type'=>1,
                'open_in_same'=>true,
                'position'=>1,
                'status'=>true,
                'page_content'=>$faker->paragraph(15),
                'external_url'=>$faker->url(),
                'banner_image'=>$faker->imageUrl(),
                'meta_title'=>"Home",
                'meta_keywords'=>$faker->sentence(),
                'meta_description'=>$faker->sentence(),
                'og_image'=>$faker->imageUrl(),
            ],
            [
                'title'=>"About",
                'type'=>1,
                'open_in_same'=>true,
                'position'=>2,
                'status'=>true,
                'page_content'=>$faker->paragraph(15),
                'external_url'=>$faker->url(),
                'banner_image'=>$faker->imageUrl(),
                'meta_title'=>"About",
                'meta_keywords'=>$faker->sentence(),
                'meta_description'=>$faker->sentence(),
                'og_image'=>$faker->imageUrl(),
            ],
            [
                'title'=>"Blog",
                'type'=>1,
                'open_in_same'=>true,
                'position'=>3,
                'status'=>true,
                'page_content'=>$faker->paragraph(15),
                'external_url'=>$faker->url(),
                'banner_image'=>$faker->imageUrl(),
                'meta_title'=>"Blog",
                'meta_keywords'=>$faker->sentence(),
                'meta_description'=>$faker->sentence(),
                'og_image'=>$faker->imageUrl(),
            ],
            [
                'title'=>"Contact",
                'type'=>1,
                'open_in_same'=>true,
                'position'=>4,
                'status'=>true,
                'page_content'=>$faker->paragraph(15),
                'external_url'=>$faker->url(),
                'banner_image'=>$faker->imageUrl(),
                'meta_title'=>"Contact",
                'meta_keywords'=>$faker->sentence(),
                'meta_description'=>$faker->sentence(),
                'og_image'=>$faker->imageUrl(),
            ],
            [
                'title'=>"CV Generation",
                'type'=>1,
                'open_in_same'=>true,
                'position'=>5,
                'status'=>true,
                'page_content'=>$faker->paragraph(15),
                'external_url'=>$faker->url(),
                'banner_image'=>$faker->imageUrl(),
                'meta_title'=>"CV Generation",
                'meta_keywords'=>$faker->sentence(),
                'meta_description'=>$faker->sentence(),
                'og_image'=>$faker->imageUrl(),
            ],
            [
                'title'=>"Cover Letter",
                'type'=>1,
                'open_in_same'=>true,
                'position'=>6,
                'status'=>true,
                'page_content'=>$faker->paragraph(15),
                'external_url'=>$faker->url(),
                'banner_image'=>$faker->imageUrl(),
                'meta_title'=>"Cover Letter",
                'meta_keywords'=>$faker->sentence(),
                'meta_description'=>$faker->sentence(),
                'og_image'=>$faker->imageUrl(),
            ],
        ];
    }
}
