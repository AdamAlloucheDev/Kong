<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {

            $token = md5(uniqid(true));

            DB::table('posts')->insert([
                'body' => $faker->paragraph(1),
                'image' => '1.png',
                'user_id' => 1,
                'likes' => 43
            ]);
            
        }
    }
}
