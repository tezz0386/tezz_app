<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        Schema::disableForeignKeyConstraints();
        DB::table('settings')->truncate();
        DB::table('settings')->insert([
            'app_name'=>"Tejendra Dangaura",
            'logo'=>$faker->imageUrl(),
            'address'=>$faker->address(),
            'contact_no_1'=>9805777500,
            'contact_no_2'=>null,
            'email_address_1'=>'dangaura.tejendra.123@gmail.com',
            'email_address_2'=>null,
            'email_address_3'=>null,
            'fb_link'=>null,
            'insta_link'=>null,
            'twiter_link'=>null,
            'linkedin_link'=>null,
            'youtube_link'=>null,
            'meta_title'=>"Tejendra Dangaura Full Stack Developer",
            'meta_keywords'=>'Tejendra Dangaura, laravel, laravel developer, vue js, vue js developer, fullstack developer, full stack developer',
            'meta_description'=>'Tejendra Dangaura',
            'og_image'=>$faker->imageUrl(),
            'icon_image'=>$faker->imageUrl(),
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
